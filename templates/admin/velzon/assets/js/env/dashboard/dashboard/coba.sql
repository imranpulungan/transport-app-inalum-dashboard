-- SELECT CAST ('01' AS VARCHAR), CAST ('02' AS VARCHAR), CAST ('03' AS VARCHAR)
select b.bulan, (SELECT COALESCE(SUM(SMT.F_TOTAL_JAM(T2.TANGGAL, T2.JAM_LAPOR, T2.JAM_SELESAI))::INT,0 )
 FROM smt.tr_pekerjaan t1
 LEFT JOIN smt.tr_pekerjaan_jadwal t2 ON t1.kd_pekerjaan = t2.kd_pekerjaan
 WHERE EXTRACT(MONTH FROM t2.tanggal) = b.bulan AND 
		  EXTRACT(YEAR FROM t2.tanggal) = 2022 AND 
		  t1.is_deleted = FALSE
) as total_jam
from 
(SELECT '01'::double precision AS BULAN 
UNION ALL SELECT '02' 
UNION ALL SELECT '03' 
UNION ALL SELECT '04' 
UNION ALL SELECT '05' 
UNION ALL SELECT '06' 
UNION ALL SELECT '07'
UNION ALL SELECT '08'
UNION ALL SELECT '09'
UNION ALL SELECT '10'
UNION ALL SELECT '11'
UNION ALL SELECT '12') b



SELECT COALESCE((
	SELECT COUNT(*) FROM SMT.V_SCHEDULE WHERE KD_PEKERJAAN IS NOT NULL AND IS_DELETED = FALSE
), 0) AS EXECUTED,
COALESCE((
	SELECT COUNT(*) FROM SMT.V_SCHEDULE WHERE KD_PEKERJAAN IS NULL AND IS_DELETED = FALSE
), 0) AS PENDING,
X.TOTAL_JAM,
X.TOTAL_JAM_3K,
(X.SCHEDULE + X.PREVENTIF) AS PLANNED_DT,
X.TROUBLE AS UNPLANNED_DT
FROM 
(
SELECT
	COALESCE((
-- 		SELECT SUM(EXTRACT(EPOCH FROM (PP.TANGGAL_AKHIR - PP.TANGGAL_AWAL)) / 60)::INT FROM
-- 		SELECT SUM(EXTRACT(EPOCH FROM ((PP.TANGGAL_AKHIR||' 08:00:00')::timestamp - (PP.TANGGAL_AWAL||' 08:00:00')::timestamp)) / 60)::INT FROM
		SELECT SUM(EXTRACT(EPOCH FROM (current_timestamp  - (PP.TANGGAL_AWAL||' 08:00:00')::timestamp)) / 60)::INT FROM
		(
			SELECT MIN(T2.TANGGAL) AS TANGGAL_AWAL, MAX(T2.TANGGAL) AS TANGGAL_AKHIR
			FROM SMT.TR_PEKERJAAN T1
			LEFT JOIN SMT.TR_PEKERJAAN_JADWAL T2 ON T1.KD_PEKERJAAN = T2.KD_PEKERJAAN 
			WHERE T1.IS_DELETED = FALSE AND T1.KD_KATEGORI_PEKERJAAN IN ('KP001', 'KP002', 'KP003')
		 ) PP
	), 0) AS TOTAL_JAM,
	COALESCE((
		SELECT COALESCE(SUM(SMT.F_TOTAL_JAM(T2.TANGGAL, T2.JAM_LAPOR, T2.JAM_SELESAI))::INT,0 )
		FROM SMT.TR_PEKERJAAN T1
		LEFT JOIN SMT.TR_PEKERJAAN_JADWAL T2 ON T1.KD_PEKERJAAN = T2.KD_PEKERJAAN 
		WHERE T1.IS_DELETED = FALSE AND T1.KD_KATEGORI_PEKERJAAN IN ('KP001', 'KP002', 'KP003')
	), 0) AS TOTAL_JAM_3K,
	COALESCE((
		SELECT COALESCE(SUM(SMT.F_TOTAL_JAM(T2.TANGGAL, T2.JAM_LAPOR, T2.JAM_SELESAI))::INT,0 )
		FROM SMT.TR_PEKERJAAN T1
		LEFT JOIN SMT.TR_PEKERJAAN_JADWAL T2 ON T1.KD_PEKERJAAN = T2.KD_PEKERJAAN 
		WHERE T1.IS_DELETED = FALSE AND t1.kd_kategori_pekerjaan = 'KP001'
	), 0) AS SCHEDULE,
	COALESCE((
		SELECT COALESCE(SUM(SMT.F_TOTAL_JAM(T2.TANGGAL, T2.JAM_LAPOR, T2.JAM_SELESAI))::INT,0 )
		FROM SMT.TR_PEKERJAAN T1
		LEFT JOIN SMT.TR_PEKERJAAN_JADWAL T2 ON T1.KD_PEKERJAAN = T2.KD_PEKERJAAN 
		WHERE T1.IS_DELETED = FALSE AND t1.kd_kategori_pekerjaan = 'KP002'
	), 0) AS PREVENTIF,
	COALESCE((
		SELECT COALESCE(SUM(SMT.F_TOTAL_JAM(T2.TANGGAL, T2.JAM_LAPOR, T2.JAM_SELESAI))::INT,0 )
		FROM SMT.TR_PEKERJAAN T1
		LEFT JOIN SMT.TR_PEKERJAAN_JADWAL T2 ON T1.KD_PEKERJAAN = T2.KD_PEKERJAAN 
		WHERE T1.IS_DELETED = FALSE AND t1.kd_kategori_pekerjaan = 'KP003'
	), 0) AS TROUBLE
) X

-- SELECT *
-- FROM SMT.TR_PEKERJAAN T1
-- LEFT JOIN SMT.TR_PEKERJAAN_JADWAL T2 ON T1.KD_PEKERJAAN = T2.KD_PEKERJAAN 
-- WHERE T1.IS_DELETED = FALSE AND t1.kd_kategori_pekerjaan = 'KP003'
