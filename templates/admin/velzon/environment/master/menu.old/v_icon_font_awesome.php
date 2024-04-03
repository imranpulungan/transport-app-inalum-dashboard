<div class="form-group">
    <input type="text" class="form-control" placeholder="Cari Icon Font Awesome" id="searchFontawesomeIcon" />
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#searchFontawesomeIcon').on('keyup', function(e) {
            e.preventDefault();
            var value = $(this).val().toLowerCase();

            $(".iconFAName").filter(function() {
                $(this).parents('.chooseThisIcon').addClass('d-none');

                if ($(this).text().toLowerCase().indexOf(value) > -1) {
                    $(this).parents('.chooseThisIcon').removeClass('d-none');
                }
            });
        });

        $('.chooseThisIcon').on('click', function(event) {
            var $thisIcon = $(this);
            var icon = $thisIcon.find('.iconStartHere');
            var iconHtml = icon.html();
            var iconRemoved = icon.children().removeClass('icon-xl').addClass('menu-icon').parent().html();

            $thisIcon.find('.iconStartHere').html(iconHtml)
            // console.log('HTML', iconHtml)
            // console.log('Removed', iconRemoved)

            $('#icon').val(iconRemoved);
            $('#iconPlace').html(iconHtml);

            $thisIcon.parents('#modalIcon').modal('hide');
        })
    })
</script>
<div class="card-body">
    <div class="row">
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-500px"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-500px</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-accessible-icon"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-accessible-icon</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-accusoft"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-accusoft</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-acquisitions-incorporated"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-acquisitions-incorporated</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-adn"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-adn</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-adobe"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-adobe</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-adversal"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-adversal</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-affiliatetheme"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-affiliatetheme</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-airbnb"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-airbnb</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-algolia"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-algolia</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-alipay"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-alipay</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-amazon"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-amazon</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-amazon-pay"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-amazon-pay</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-amilia"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-amilia</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-android"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-android</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-angellist"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-angellist</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-angrycreative"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-angrycreative</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-angular"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-angular</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-app-store"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-app-store</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-app-store-ios"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-app-store-ios</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-apper"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-apper</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-apple"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-apple</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-apple-pay"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-apple-pay</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-artstation"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-artstation</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-asymmetrik"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-asymmetrik</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-atlassian"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-atlassian</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-audible"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-audible</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-autoprefixer"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-autoprefixer</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-avianex"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-avianex</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-aviato"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-aviato</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-aws"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-aws</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-bandcamp"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-bandcamp</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-battle-net"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-battle-net</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-behance"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-behance</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-behance-square"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-behance-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-bimobject"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-bimobject</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-bitbucket"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-bitbucket</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-bitcoin"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-bitcoin</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-bity"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-bity</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-black-tie"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-black-tie</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-blackberry"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-blackberry</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-blogger"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-blogger</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-blogger-b"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-blogger-b</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-bluetooth"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-bluetooth</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-bluetooth-b"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-bluetooth-b</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-bootstrap"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-bootstrap</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-btc"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-btc</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-buffer"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-buffer</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-buromobelexperte"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-buromobelexperte</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-buy-n-large"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-buy-n-large</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-buysellads"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-buysellads</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-canadian-maple-leaf"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-canadian-maple-leaf</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-cc-amazon-pay"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-cc-amazon-pay</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-cc-amex"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-cc-amex</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-cc-apple-pay"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-cc-apple-pay</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-cc-diners-club"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-cc-diners-club</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-cc-discover"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-cc-discover</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-cc-jcb"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-cc-jcb</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-cc-mastercard"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-cc-mastercard</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-cc-paypal"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-cc-paypal</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-cc-stripe"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-cc-stripe</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-cc-visa"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-cc-visa</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-centercode"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-centercode</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-centos"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-centos</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-chrome"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-chrome</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-chromecast"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-chromecast</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-cloudscale"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-cloudscale</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-cloudsmith"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-cloudsmith</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-cloudversify"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-cloudversify</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-codepen"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-codepen</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-codiepie"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-codiepie</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-confluence"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-confluence</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-connectdevelop"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-connectdevelop</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-contao"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-contao</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-cotton-bureau"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-cotton-bureau</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-cpanel"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-cpanel</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-creative-commons"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-creative-commons</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-creative-commons-by"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-creative-commons-by</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-creative-commons-nc"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-creative-commons-nc</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-creative-commons-nc-eu"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-creative-commons-nc-eu</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-creative-commons-nc-jp"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-creative-commons-nc-jp</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-creative-commons-nd"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-creative-commons-nd</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-creative-commons-pd"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-creative-commons-pd</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-creative-commons-pd-alt"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-creative-commons-pd-alt</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-creative-commons-remix"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-creative-commons-remix</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-creative-commons-sa"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-creative-commons-sa</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-creative-commons-sampling"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-creative-commons-sampling</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-creative-commons-sampling-plus"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-creative-commons-sampling-plus</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-creative-commons-share"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-creative-commons-share</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-creative-commons-zero"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-creative-commons-zero</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-critical-role"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-critical-role</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-css3"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-css3</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-css3-alt"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-css3-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-cuttlefish"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-cuttlefish</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-d-and-d"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-d-and-d</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-d-and-d-beyond"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-d-and-d-beyond</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-dailymotion"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-dailymotion</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-dashcube"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-dashcube</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-deezer"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-deezer</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-delicious"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-delicious</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-deploydog"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-deploydog</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-deskpro"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-deskpro</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-dev"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-dev</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-deviantart"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-deviantart</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-dhl"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-dhl</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-diaspora"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-diaspora</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-digg"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-digg</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-digital-ocean"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-digital-ocean</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-discord"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-discord</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-discourse"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-discourse</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-dochub"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-dochub</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-docker"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-docker</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-draft2digital"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-draft2digital</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-dribbble"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-dribbble</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-dribbble-square"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-dribbble-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-dropbox"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-dropbox</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-drupal"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-drupal</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-dyalog"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-dyalog</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-earlybirds"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-earlybirds</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-ebay"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-ebay</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-edge"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-edge</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-edge-legacy"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-edge-legacy</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-elementor"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-elementor</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-ello"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-ello</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-ember"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-ember</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-empire"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-empire</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-envira"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-envira</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-erlang"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-erlang</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-ethereum"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-ethereum</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-etsy"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-etsy</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-evernote"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-evernote</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-expeditedssl"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-expeditedssl</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-facebook"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-facebook</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-facebook-f"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-facebook-f</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-facebook-messenger"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-facebook-messenger</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-facebook-square"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-facebook-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-fantasy-flight-games"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-fantasy-flight-games</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-fedex"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-fedex</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-fedora"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-fedora</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-figma"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-figma</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-firefox"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-firefox</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-firefox-browser"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-firefox-browser</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-first-order"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-first-order</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-first-order-alt"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-first-order-alt</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-firstdraft"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-firstdraft</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-flickr"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-flickr</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-flipboard"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-flipboard</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-fly"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-fly</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-font-awesome"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-font-awesome</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-font-awesome-alt"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-font-awesome-alt</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-font-awesome-flag"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-font-awesome-flag</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-font-awesome-logo-full"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-font-awesome-logo-full</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-fonticons"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-fonticons</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-fonticons-fi"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-fonticons-fi</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-fort-awesome"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-fort-awesome</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-fort-awesome-alt"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-fort-awesome-alt</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-forumbee"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-forumbee</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-foursquare"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-foursquare</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-free-code-camp"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-free-code-camp</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-freebsd"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-freebsd</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-fulcrum"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-fulcrum</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-galactic-republic"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-galactic-republic</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-galactic-senate"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-galactic-senate</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-get-pocket"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-get-pocket</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-gg"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-gg</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-gg-circle"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-gg-circle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-git"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-git</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-git-alt"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-git-alt</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-git-square"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-git-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-github"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-github</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-github-alt"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-github-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-github-square"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-github-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-gitkraken"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-gitkraken</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-gitlab"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-gitlab</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-gitter"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-gitter</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-glide"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-glide</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-glide-g"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-glide-g</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-gofore"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-gofore</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-goodreads"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-goodreads</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-goodreads-g"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-goodreads-g</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-google"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-google</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-google-drive"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-google-drive</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-google-pay"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-google-pay</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-google-play"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-google-play</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-google-plus"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-google-plus</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-google-plus-g"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-google-plus-g</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-google-plus-square"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-google-plus-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-google-wallet"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-google-wallet</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-gratipay"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-gratipay</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-grav"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-grav</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-gripfire"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-gripfire</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-grunt"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-grunt</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-gulp"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-gulp</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-hacker-news"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-hacker-news</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-hacker-news-square"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-hacker-news-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-hackerrank"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-hackerrank</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-hips"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-hips</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-hire-a-helper"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-hire-a-helper</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-hooli"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-hooli</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-hornbill"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-hornbill</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-hotjar"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-hotjar</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-houzz"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-houzz</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-html5"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-html5</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-hubspot"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-hubspot</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-ideal"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-ideal</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-imdb"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-imdb</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-instagram"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-instagram</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-instagram-square"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-instagram-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-intercom"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-intercom</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-internet-explorer"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-internet-explorer</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-invision"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-invision</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-ioxhost"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-ioxhost</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-itch-io"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-itch-io</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-itunes"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-itunes</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-itunes-note"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-itunes-note</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-java"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-java</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-jedi-order"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-jedi-order</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-jenkins"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-jenkins</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-jira"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-jira</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-joget"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-joget</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-joomla"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-joomla</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-js"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-js</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-js-square"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-js-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-jsfiddle"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-jsfiddle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-kaggle"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-kaggle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-keybase"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-keybase</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-keycdn"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-keycdn</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-kickstarter"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-kickstarter</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-kickstarter-k"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-kickstarter-k</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-korvue"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-korvue</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-laravel"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-laravel</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-lastfm"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-lastfm</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-lastfm-square"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-lastfm-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-leanpub"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-leanpub</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-less"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-less</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-line"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-line</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-linkedin"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-linkedin</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-linkedin-in"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-linkedin-in</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-linode"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-linode</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-linux"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-linux</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-lyft"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-lyft</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-magento"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-magento</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-mailchimp"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-mailchimp</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-mandalorian"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-mandalorian</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-markdown"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-markdown</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-mastodon"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-mastodon</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-maxcdn"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-maxcdn</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-mdb"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-mdb</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-medapps"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-medapps</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-medium"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-medium</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-medium-m"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-medium-m</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-medrt"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-medrt</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-meetup"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-meetup</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-megaport"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-megaport</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-mendeley"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-mendeley</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-microblog"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-microblog</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-microsoft"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-microsoft</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-mix"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-mix</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-mixcloud"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-mixcloud</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-mixer"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-mixer</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-mizuni"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-mizuni</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-modx"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-modx</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-monero"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-monero</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-napster"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-napster</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-neos"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-neos</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-nimblr"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-nimblr</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-node"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-node</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-node-js"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-node-js</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-npm"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-npm</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-ns8"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-ns8</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-nutritionix"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-nutritionix</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-odnoklassniki"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-odnoklassniki</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-odnoklassniki-square"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-odnoklassniki-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-old-republic"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-old-republic</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-opencart"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-opencart</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-openid"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-openid</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-opera"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-opera</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-optin-monster"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-optin-monster</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-orcid"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-orcid</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-osi"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-osi</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-page4"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-page4</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-pagelines"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-pagelines</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-palfed"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-palfed</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-patreon"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-patreon</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-paypal"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-paypal</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-penny-arcade"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-penny-arcade</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-periscope"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-periscope</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-phabricator"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-phabricator</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-phoenix-framework"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-phoenix-framework</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-phoenix-squadron"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-phoenix-squadron</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-php"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-php</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-pied-piper"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-pied-piper</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-pied-piper-alt"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-pied-piper-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-pied-piper-hat"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-pied-piper-hat</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-pied-piper-pp"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-pied-piper-pp</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-pied-piper-square"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-pied-piper-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-pinterest"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-pinterest</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-pinterest-p"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-pinterest-p</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-pinterest-square"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-pinterest-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-playstation"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-playstation</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-product-hunt"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-product-hunt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-pushed"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-pushed</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-python"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-python</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-qq"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-qq</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-quinscape"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-quinscape</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-quora"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-quora</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-r-project"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-r-project</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-raspberry-pi"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-raspberry-pi</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-ravelry"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-ravelry</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-react"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-react</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-reacteurope"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-reacteurope</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-readme"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-readme</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-rebel"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-rebel</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-red-river"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-red-river</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-reddit"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-reddit</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-reddit-alien"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-reddit-alien</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-reddit-square"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-reddit-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-redhat"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-redhat</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-renren"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-renren</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-replyd"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-replyd</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-researchgate"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-researchgate</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-resolving"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-resolving</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-rev"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-rev</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-rocketchat"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-rocketchat</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-rockrms"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-rockrms</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-rust"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-rust</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-safari"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-safari</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-salesforce"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-salesforce</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-sass"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-sass</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-schlix"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-schlix</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-scribd"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-scribd</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-searchengin"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-searchengin</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-sellcast"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-sellcast</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-sellsy"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-sellsy</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-servicestack"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-servicestack</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-shirtsinbulk"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-shirtsinbulk</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-shopify"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-shopify</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-shopware"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-shopware</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-simplybuilt"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-simplybuilt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-sistrix"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-sistrix</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-sith"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-sith</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-sketch"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-sketch</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-skyatlas"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-skyatlas</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-skype"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-skype</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-slack"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-slack</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-slack-hash"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-slack-hash</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-slideshare"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-slideshare</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-snapchat"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-snapchat</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-snapchat-ghost"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-snapchat-ghost</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-snapchat-square"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-snapchat-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-soundcloud"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-soundcloud</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-sourcetree"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-sourcetree</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-speakap"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-speakap</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-speaker-deck"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-speaker-deck</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-spotify"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-spotify</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-squarespace"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-squarespace</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-stack-exchange"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-stack-exchange</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-stack-overflow"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-stack-overflow</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-stackpath"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-stackpath</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-staylinked"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-staylinked</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-steam"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-steam</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-steam-square"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-steam-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-steam-symbol"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-steam-symbol</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-sticker-mule"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-sticker-mule</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-strava"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-strava</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-stripe"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-stripe</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-stripe-s"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-stripe-s</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-studiovinari"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-studiovinari</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-stumbleupon"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-stumbleupon</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-stumbleupon-circle"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-stumbleupon-circle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-superpowers"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-superpowers</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-supple"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-supple</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-suse"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-suse</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-swift"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-swift</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-symfony"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-symfony</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-teamspeak"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-teamspeak</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-telegram"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-telegram</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-telegram-plane"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-telegram-plane</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-tencent-weibo"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-tencent-weibo</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-the-red-yeti"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-the-red-yeti</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-themeco"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-themeco</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-themeisle"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-themeisle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-think-peaks"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-think-peaks</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-tiktok"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-tiktok</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-trade-federation"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-trade-federation</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-trello"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-trello</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-tripadvisor"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-tripadvisor</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-tumblr"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-tumblr</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-tumblr-square"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-tumblr-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-twitch"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-twitch</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-twitter"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-twitter</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-twitter-square"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-twitter-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-typo3"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-typo3</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-uber"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-uber</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-ubuntu"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-ubuntu</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-uikit"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-uikit</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-umbraco"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-umbraco</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-uniregistry"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-uniregistry</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-unity"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-unity</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-unsplash"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-unsplash</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-untappd"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-untappd</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-ups"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-ups</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-usb"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-usb</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-usps"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-usps</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-ussunnah"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-ussunnah</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-vaadin"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-vaadin</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-viacoin"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-viacoin</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-viadeo"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-viadeo</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-viadeo-square"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-viadeo-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-viber"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-viber</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-vimeo"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-vimeo</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-vimeo-square"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-vimeo-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-vimeo-v"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-vimeo-v</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-vine"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-vine</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-vk"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-vk</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-vnv"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-vnv</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-vuejs"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-vuejs</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-waze"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-waze</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-weebly"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-weebly</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-weibo"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-weibo</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-weixin"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-weixin</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-whatsapp"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-whatsapp</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-whatsapp-square"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-whatsapp-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-whmcs"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-whmcs</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-wikipedia-w"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-wikipedia-w</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-windows"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-windows</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-wix"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-wix</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-wizards-of-the-coast"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-wizards-of-the-coast</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-wolf-pack-battalion"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-wolf-pack-battalion</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-wordpress"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-wordpress</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-wordpress-simple"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-wordpress-simple</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-wpbeginner"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-wpbeginner</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-wpexplorer"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-wpexplorer</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-wpforms"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-wpforms</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-wpressr"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-wpressr</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-xbox"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-xbox</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-xing"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-xing</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-xing-square"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-xing-square</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-y-combinator"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-y-combinator</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-yahoo"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-yahoo</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-yammer"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-yammer</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-yandex"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-yandex</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-yandex-international"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-yandex-international</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-yarn"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-yarn</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-yelp"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-yelp</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-yoast"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-yoast</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-youtube"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-youtube</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-youtube-square"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-youtube-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fab fa-zhihu"></i>
                </div>
                <div class="text-muted iconFAName">fab fa-zhihu</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-address-book"></i>
                </div>
                <div class="text-muted iconFAName">far fa-address-book</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-address-card"></i>
                </div>
                <div class="text-muted iconFAName">far fa-address-card</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-angry"></i>
                </div>
                <div class="text-muted iconFAName">far fa-angry</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-arrow-alt-circle-down"></i>
                </div>
                <div class="text-muted iconFAName">far fa-arrow-alt-circle-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-arrow-alt-circle-left"></i>
                </div>
                <div class="text-muted iconFAName">far fa-arrow-alt-circle-left</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-arrow-alt-circle-right"></i>
                </div>
                <div class="text-muted iconFAName">far fa-arrow-alt-circle-right</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-arrow-alt-circle-up"></i>
                </div>
                <div class="text-muted iconFAName">far fa-arrow-alt-circle-up</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-bell"></i>
                </div>
                <div class="text-muted iconFAName">far fa-bell</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-bell-slash"></i>
                </div>
                <div class="text-muted iconFAName">far fa-bell-slash</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-bookmark"></i>
                </div>
                <div class="text-muted iconFAName">far fa-bookmark</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-building"></i>
                </div>
                <div class="text-muted iconFAName">far fa-building</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-calendar"></i>
                </div>
                <div class="text-muted iconFAName">far fa-calendar</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-calendar-alt"></i>
                </div>
                <div class="text-muted iconFAName">far fa-calendar-alt</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-calendar-check"></i>
                </div>
                <div class="text-muted iconFAName">far fa-calendar-check</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-calendar-minus"></i>
                </div>
                <div class="text-muted iconFAName">far fa-calendar-minus</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-calendar-plus"></i>
                </div>
                <div class="text-muted iconFAName">far fa-calendar-plus</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-calendar-times"></i>
                </div>
                <div class="text-muted iconFAName">far fa-calendar-times</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-caret-square-down"></i>
                </div>
                <div class="text-muted iconFAName">far fa-caret-square-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-caret-square-left"></i>
                </div>
                <div class="text-muted iconFAName">far fa-caret-square-left</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-caret-square-right"></i>
                </div>
                <div class="text-muted iconFAName">far fa-caret-square-right</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-caret-square-up"></i>
                </div>
                <div class="text-muted iconFAName">far fa-caret-square-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-chart-bar"></i>
                </div>
                <div class="text-muted iconFAName">far fa-chart-bar</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-check-circle"></i>
                </div>
                <div class="text-muted iconFAName">far fa-check-circle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-check-square"></i>
                </div>
                <div class="text-muted iconFAName">far fa-check-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-circle"></i>
                </div>
                <div class="text-muted iconFAName">far fa-circle</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-clipboard"></i>
                </div>
                <div class="text-muted iconFAName">far fa-clipboard</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-clock"></i>
                </div>
                <div class="text-muted iconFAName">far fa-clock</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-clone"></i>
                </div>
                <div class="text-muted iconFAName">far fa-clone</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-closed-captioning"></i>
                </div>
                <div class="text-muted iconFAName">far fa-closed-captioning</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-comment"></i>
                </div>
                <div class="text-muted iconFAName">far fa-comment</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-comment-alt"></i>
                </div>
                <div class="text-muted iconFAName">far fa-comment-alt</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-comment-dots"></i>
                </div>
                <div class="text-muted iconFAName">far fa-comment-dots</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-comments"></i>
                </div>
                <div class="text-muted iconFAName">far fa-comments</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-compass"></i>
                </div>
                <div class="text-muted iconFAName">far fa-compass</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-copy"></i>
                </div>
                <div class="text-muted iconFAName">far fa-copy</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-copyright"></i>
                </div>
                <div class="text-muted iconFAName">far fa-copyright</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-credit-card"></i>
                </div>
                <div class="text-muted iconFAName">far fa-credit-card</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-dizzy"></i>
                </div>
                <div class="text-muted iconFAName">far fa-dizzy</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-dot-circle"></i>
                </div>
                <div class="text-muted iconFAName">far fa-dot-circle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-edit"></i>
                </div>
                <div class="text-muted iconFAName">far fa-edit</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-envelope"></i>
                </div>
                <div class="text-muted iconFAName">far fa-envelope</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-envelope-open"></i>
                </div>
                <div class="text-muted iconFAName">far fa-envelope-open</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-eye"></i>
                </div>
                <div class="text-muted iconFAName">far fa-eye</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-eye-slash"></i>
                </div>
                <div class="text-muted iconFAName">far fa-eye-slash</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-file"></i>
                </div>
                <div class="text-muted iconFAName">far fa-file</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-file-alt"></i>
                </div>
                <div class="text-muted iconFAName">far fa-file-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-file-archive"></i>
                </div>
                <div class="text-muted iconFAName">far fa-file-archive</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-file-audio"></i>
                </div>
                <div class="text-muted iconFAName">far fa-file-audio</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-file-code"></i>
                </div>
                <div class="text-muted iconFAName">far fa-file-code</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-file-excel"></i>
                </div>
                <div class="text-muted iconFAName">far fa-file-excel</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-file-image"></i>
                </div>
                <div class="text-muted iconFAName">far fa-file-image</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-file-pdf"></i>
                </div>
                <div class="text-muted iconFAName">far fa-file-pdf</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-file-powerpoint"></i>
                </div>
                <div class="text-muted iconFAName">far fa-file-powerpoint</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-file-video"></i>
                </div>
                <div class="text-muted iconFAName">far fa-file-video</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-file-word"></i>
                </div>
                <div class="text-muted iconFAName">far fa-file-word</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-flag"></i>
                </div>
                <div class="text-muted iconFAName">far fa-flag</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-flushed"></i>
                </div>
                <div class="text-muted iconFAName">far fa-flushed</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-folder"></i>
                </div>
                <div class="text-muted iconFAName">far fa-folder</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-folder-open"></i>
                </div>
                <div class="text-muted iconFAName">far fa-folder-open</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-font-awesome-logo-full"></i>
                </div>
                <div class="text-muted iconFAName">far fa-font-awesome-logo-full</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-frown"></i>
                </div>
                <div class="text-muted iconFAName">far fa-frown</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-frown-open"></i>
                </div>
                <div class="text-muted iconFAName">far fa-frown-open</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-futbol"></i>
                </div>
                <div class="text-muted iconFAName">far fa-futbol</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-gem"></i>
                </div>
                <div class="text-muted iconFAName">far fa-gem</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-grimace"></i>
                </div>
                <div class="text-muted iconFAName">far fa-grimace</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-grin"></i>
                </div>
                <div class="text-muted iconFAName">far fa-grin</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-grin-alt"></i>
                </div>
                <div class="text-muted iconFAName">far fa-grin-alt</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-grin-beam"></i>
                </div>
                <div class="text-muted iconFAName">far fa-grin-beam</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-grin-beam-sweat"></i>
                </div>
                <div class="text-muted iconFAName">far fa-grin-beam-sweat</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-grin-hearts"></i>
                </div>
                <div class="text-muted iconFAName">far fa-grin-hearts</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-grin-squint"></i>
                </div>
                <div class="text-muted iconFAName">far fa-grin-squint</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-grin-squint-tears"></i>
                </div>
                <div class="text-muted iconFAName">far fa-grin-squint-tears</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-grin-stars"></i>
                </div>
                <div class="text-muted iconFAName">far fa-grin-stars</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-grin-tears"></i>
                </div>
                <div class="text-muted iconFAName">far fa-grin-tears</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-grin-tongue"></i>
                </div>
                <div class="text-muted iconFAName">far fa-grin-tongue</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-grin-tongue-squint"></i>
                </div>
                <div class="text-muted iconFAName">far fa-grin-tongue-squint</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-grin-tongue-wink"></i>
                </div>
                <div class="text-muted iconFAName">far fa-grin-tongue-wink</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-grin-wink"></i>
                </div>
                <div class="text-muted iconFAName">far fa-grin-wink</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-hand-lizard"></i>
                </div>
                <div class="text-muted iconFAName">far fa-hand-lizard</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-hand-paper"></i>
                </div>
                <div class="text-muted iconFAName">far fa-hand-paper</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-hand-peace"></i>
                </div>
                <div class="text-muted iconFAName">far fa-hand-peace</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-hand-point-down"></i>
                </div>
                <div class="text-muted iconFAName">far fa-hand-point-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-hand-point-left"></i>
                </div>
                <div class="text-muted iconFAName">far fa-hand-point-left</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-hand-point-right"></i>
                </div>
                <div class="text-muted iconFAName">far fa-hand-point-right</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-hand-point-up"></i>
                </div>
                <div class="text-muted iconFAName">far fa-hand-point-up</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-hand-pointer"></i>
                </div>
                <div class="text-muted iconFAName">far fa-hand-pointer</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-hand-rock"></i>
                </div>
                <div class="text-muted iconFAName">far fa-hand-rock</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-hand-scissors"></i>
                </div>
                <div class="text-muted iconFAName">far fa-hand-scissors</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-hand-spock"></i>
                </div>
                <div class="text-muted iconFAName">far fa-hand-spock</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-handshake"></i>
                </div>
                <div class="text-muted iconFAName">far fa-handshake</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-hdd"></i>
                </div>
                <div class="text-muted iconFAName">far fa-hdd</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-heart"></i>
                </div>
                <div class="text-muted iconFAName">far fa-heart</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-hospital"></i>
                </div>
                <div class="text-muted iconFAName">far fa-hospital</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-hourglass"></i>
                </div>
                <div class="text-muted iconFAName">far fa-hourglass</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-id-badge"></i>
                </div>
                <div class="text-muted iconFAName">far fa-id-badge</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-id-card"></i>
                </div>
                <div class="text-muted iconFAName">far fa-id-card</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-image"></i>
                </div>
                <div class="text-muted iconFAName">far fa-image</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-images"></i>
                </div>
                <div class="text-muted iconFAName">far fa-images</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-keyboard"></i>
                </div>
                <div class="text-muted iconFAName">far fa-keyboard</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-kiss"></i>
                </div>
                <div class="text-muted iconFAName">far fa-kiss</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-kiss-beam"></i>
                </div>
                <div class="text-muted iconFAName">far fa-kiss-beam</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-kiss-wink-heart"></i>
                </div>
                <div class="text-muted iconFAName">far fa-kiss-wink-heart</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-laugh"></i>
                </div>
                <div class="text-muted iconFAName">far fa-laugh</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-laugh-beam"></i>
                </div>
                <div class="text-muted iconFAName">far fa-laugh-beam</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-laugh-squint"></i>
                </div>
                <div class="text-muted iconFAName">far fa-laugh-squint</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-laugh-wink"></i>
                </div>
                <div class="text-muted iconFAName">far fa-laugh-wink</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-lemon"></i>
                </div>
                <div class="text-muted iconFAName">far fa-lemon</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-life-ring"></i>
                </div>
                <div class="text-muted iconFAName">far fa-life-ring</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-lightbulb"></i>
                </div>
                <div class="text-muted iconFAName">far fa-lightbulb</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-list-alt"></i>
                </div>
                <div class="text-muted iconFAName">far fa-list-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-map"></i>
                </div>
                <div class="text-muted iconFAName">far fa-map</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-meh"></i>
                </div>
                <div class="text-muted iconFAName">far fa-meh</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-meh-blank"></i>
                </div>
                <div class="text-muted iconFAName">far fa-meh-blank</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-meh-rolling-eyes"></i>
                </div>
                <div class="text-muted iconFAName">far fa-meh-rolling-eyes</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-minus-square"></i>
                </div>
                <div class="text-muted iconFAName">far fa-minus-square</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-money-bill-alt"></i>
                </div>
                <div class="text-muted iconFAName">far fa-money-bill-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-moon"></i>
                </div>
                <div class="text-muted iconFAName">far fa-moon</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-newspaper"></i>
                </div>
                <div class="text-muted iconFAName">far fa-newspaper</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-object-group"></i>
                </div>
                <div class="text-muted iconFAName">far fa-object-group</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-object-ungroup"></i>
                </div>
                <div class="text-muted iconFAName">far fa-object-ungroup</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-paper-plane"></i>
                </div>
                <div class="text-muted iconFAName">far fa-paper-plane</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-pause-circle"></i>
                </div>
                <div class="text-muted iconFAName">far fa-pause-circle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-play-circle"></i>
                </div>
                <div class="text-muted iconFAName">far fa-play-circle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-plus-square"></i>
                </div>
                <div class="text-muted iconFAName">far fa-plus-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-question-circle"></i>
                </div>
                <div class="text-muted iconFAName">far fa-question-circle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-registered"></i>
                </div>
                <div class="text-muted iconFAName">far fa-registered</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-sad-cry"></i>
                </div>
                <div class="text-muted iconFAName">far fa-sad-cry</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-sad-tear"></i>
                </div>
                <div class="text-muted iconFAName">far fa-sad-tear</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-save"></i>
                </div>
                <div class="text-muted iconFAName">far fa-save</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-share-square"></i>
                </div>
                <div class="text-muted iconFAName">far fa-share-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-smile"></i>
                </div>
                <div class="text-muted iconFAName">far fa-smile</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-smile-beam"></i>
                </div>
                <div class="text-muted iconFAName">far fa-smile-beam</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-smile-wink"></i>
                </div>
                <div class="text-muted iconFAName">far fa-smile-wink</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-snowflake"></i>
                </div>
                <div class="text-muted iconFAName">far fa-snowflake</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-square"></i>
                </div>
                <div class="text-muted iconFAName">far fa-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-star"></i>
                </div>
                <div class="text-muted iconFAName">far fa-star</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-star-half"></i>
                </div>
                <div class="text-muted iconFAName">far fa-star-half</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-sticky-note"></i>
                </div>
                <div class="text-muted iconFAName">far fa-sticky-note</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-stop-circle"></i>
                </div>
                <div class="text-muted iconFAName">far fa-stop-circle</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-sun"></i>
                </div>
                <div class="text-muted iconFAName">far fa-sun</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-surprise"></i>
                </div>
                <div class="text-muted iconFAName">far fa-surprise</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-thumbs-down"></i>
                </div>
                <div class="text-muted iconFAName">far fa-thumbs-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-thumbs-up"></i>
                </div>
                <div class="text-muted iconFAName">far fa-thumbs-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-times-circle"></i>
                </div>
                <div class="text-muted iconFAName">far fa-times-circle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-tired"></i>
                </div>
                <div class="text-muted iconFAName">far fa-tired</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-trash-alt"></i>
                </div>
                <div class="text-muted iconFAName">far fa-trash-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-user"></i>
                </div>
                <div class="text-muted iconFAName">far fa-user</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-user-circle"></i>
                </div>
                <div class="text-muted iconFAName">far fa-user-circle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-window-close"></i>
                </div>
                <div class="text-muted iconFAName">far fa-window-close</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-window-maximize"></i>
                </div>
                <div class="text-muted iconFAName">far fa-window-maximize</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-window-minimize"></i>
                </div>
                <div class="text-muted iconFAName">far fa-window-minimize</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl far fa-window-restore"></i>
                </div>
                <div class="text-muted iconFAName">far fa-window-restore</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-ad"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-ad</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-address-book"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-address-book</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-address-card"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-address-card</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-adjust"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-adjust</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-air-freshener"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-air-freshener</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-align-center"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-align-center</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-align-justify"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-align-justify</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-align-left"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-align-left</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-align-right"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-align-right</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-allergies"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-allergies</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-ambulance"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-ambulance</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-american-sign-language-interpreting"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-american-sign-language-interpreting</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-anchor"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-anchor</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-angle-double-down"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-angle-double-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-angle-double-left"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-angle-double-left</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-angle-double-right"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-angle-double-right</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-angle-double-up"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-angle-double-up</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-angle-down"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-angle-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-angle-left"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-angle-left</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-angle-right"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-angle-right</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-angle-up"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-angle-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-angry"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-angry</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-ankh"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-ankh</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-apple-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-apple-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-archive"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-archive</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-archway"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-archway</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-arrow-alt-circle-down"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-arrow-alt-circle-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-arrow-alt-circle-left"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-arrow-alt-circle-left</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-arrow-alt-circle-right"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-arrow-alt-circle-right</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-arrow-alt-circle-up"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-arrow-alt-circle-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-arrow-circle-down"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-arrow-circle-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-arrow-circle-left"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-arrow-circle-left</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-arrow-circle-right"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-arrow-circle-right</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-arrow-circle-up"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-arrow-circle-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-arrow-down"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-arrow-down</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-arrow-left"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-arrow-left</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-arrow-right"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-arrow-right</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-arrow-up"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-arrow-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-arrows-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-arrows-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-arrows-alt-h"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-arrows-alt-h</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-arrows-alt-v"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-arrows-alt-v</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-assistive-listening-systems"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-assistive-listening-systems</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-asterisk"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-asterisk</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-at"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-at</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-atlas"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-atlas</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-atom"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-atom</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-audio-description"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-audio-description</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-award"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-award</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-baby"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-baby</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-baby-carriage"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-baby-carriage</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-backspace"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-backspace</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-backward"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-backward</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-bacon"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-bacon</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-bacteria"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-bacteria</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-bacterium"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-bacterium</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-bahai"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-bahai</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-balance-scale"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-balance-scale</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-balance-scale-left"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-balance-scale-left</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-balance-scale-right"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-balance-scale-right</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-ban"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-ban</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-band-aid"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-band-aid</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-barcode"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-barcode</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-bars"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-bars</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-baseball-ball"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-baseball-ball</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-basketball-ball"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-basketball-ball</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-bath"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-bath</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-battery-empty"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-battery-empty</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-battery-full"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-battery-full</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-battery-half"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-battery-half</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-battery-quarter"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-battery-quarter</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-battery-three-quarters"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-battery-three-quarters</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-bed"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-bed</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-beer"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-beer</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-bell"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-bell</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-bell-slash"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-bell-slash</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-bezier-curve"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-bezier-curve</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-bible"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-bible</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-bicycle"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-bicycle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-biking"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-biking</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-binoculars"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-binoculars</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-biohazard"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-biohazard</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-birthday-cake"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-birthday-cake</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-blender"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-blender</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-blender-phone"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-blender-phone</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-blind"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-blind</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-blog"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-blog</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-bold"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-bold</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-bolt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-bolt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-bomb"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-bomb</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-bone"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-bone</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-bong"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-bong</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-book"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-book</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-book-dead"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-book-dead</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-book-medical"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-book-medical</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-book-open"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-book-open</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-book-reader"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-book-reader</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-bookmark"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-bookmark</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-border-all"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-border-all</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-border-none"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-border-none</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-border-style"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-border-style</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-bowling-ball"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-bowling-ball</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-box"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-box</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-box-open"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-box-open</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-box-tissue"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-box-tissue</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-boxes"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-boxes</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-braille"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-braille</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-brain"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-brain</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-bread-slice"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-bread-slice</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-briefcase"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-briefcase</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-briefcase-medical"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-briefcase-medical</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-broadcast-tower"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-broadcast-tower</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-broom"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-broom</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-brush"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-brush</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-bug"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-bug</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-building"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-building</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-bullhorn"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-bullhorn</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-bullseye"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-bullseye</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-burn"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-burn</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-bus"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-bus</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-bus-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-bus-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-business-time"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-business-time</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-calculator"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-calculator</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-calendar"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-calendar</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-calendar-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-calendar-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-calendar-check"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-calendar-check</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-calendar-day"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-calendar-day</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-calendar-minus"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-calendar-minus</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-calendar-plus"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-calendar-plus</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-calendar-times"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-calendar-times</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-calendar-week"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-calendar-week</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-camera"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-camera</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-camera-retro"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-camera-retro</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-campground"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-campground</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-candy-cane"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-candy-cane</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-cannabis"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-cannabis</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-capsules"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-capsules</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-car"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-car</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-car-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-car-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-car-battery"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-car-battery</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-car-crash"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-car-crash</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-car-side"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-car-side</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-caravan"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-caravan</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-caret-down"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-caret-down</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-caret-left"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-caret-left</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-caret-right"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-caret-right</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-caret-square-down"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-caret-square-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-caret-square-left"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-caret-square-left</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-caret-square-right"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-caret-square-right</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-caret-square-up"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-caret-square-up</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-caret-up"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-caret-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-carrot"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-carrot</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-cart-arrow-down"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-cart-arrow-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-cart-plus"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-cart-plus</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-cash-register"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-cash-register</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-cat"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-cat</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-certificate"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-certificate</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-chair"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-chair</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-chalkboard"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-chalkboard</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-chalkboard-teacher"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-chalkboard-teacher</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-charging-station"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-charging-station</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-chart-area"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-chart-area</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-chart-bar"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-chart-bar</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-chart-line"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-chart-line</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-chart-pie"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-chart-pie</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-check"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-check</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-check-circle"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-check-circle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-check-double"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-check-double</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-check-square"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-check-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-cheese"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-cheese</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-chess"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-chess</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-chess-bishop"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-chess-bishop</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-chess-board"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-chess-board</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-chess-king"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-chess-king</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-chess-knight"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-chess-knight</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-chess-pawn"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-chess-pawn</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-chess-queen"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-chess-queen</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-chess-rook"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-chess-rook</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-chevron-circle-down"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-chevron-circle-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-chevron-circle-left"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-chevron-circle-left</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-chevron-circle-right"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-chevron-circle-right</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-chevron-circle-up"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-chevron-circle-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-chevron-down"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-chevron-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-chevron-left"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-chevron-left</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-chevron-right"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-chevron-right</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-chevron-up"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-chevron-up</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-child"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-child</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-church"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-church</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-circle"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-circle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-circle-notch"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-circle-notch</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-city"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-city</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-clinic-medical"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-clinic-medical</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-clipboard"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-clipboard</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-clipboard-check"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-clipboard-check</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-clipboard-list"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-clipboard-list</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-clock"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-clock</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-clone"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-clone</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-closed-captioning"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-closed-captioning</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-cloud"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-cloud</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-cloud-download-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-cloud-download-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-cloud-meatball"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-cloud-meatball</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-cloud-moon"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-cloud-moon</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-cloud-moon-rain"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-cloud-moon-rain</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-cloud-rain"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-cloud-rain</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-cloud-showers-heavy"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-cloud-showers-heavy</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-cloud-sun"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-cloud-sun</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-cloud-sun-rain"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-cloud-sun-rain</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-cloud-upload-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-cloud-upload-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-cocktail"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-cocktail</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-code"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-code</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-code-branch"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-code-branch</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-coffee"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-coffee</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-cog"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-cog</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-cogs"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-cogs</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-coins"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-coins</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-columns"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-columns</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-comment"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-comment</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-comment-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-comment-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-comment-dollar"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-comment-dollar</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-comment-dots"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-comment-dots</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-comment-medical"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-comment-medical</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-comment-slash"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-comment-slash</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-comments"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-comments</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-comments-dollar"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-comments-dollar</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-compact-disc"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-compact-disc</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-compass"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-compass</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-compress"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-compress</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-compress-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-compress-alt</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-compress-arrows-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-compress-arrows-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-concierge-bell"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-concierge-bell</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-cookie"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-cookie</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-cookie-bite"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-cookie-bite</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-copy"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-copy</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-copyright"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-copyright</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-couch"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-couch</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-credit-card"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-credit-card</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-crop"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-crop</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-crop-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-crop-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-cross"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-cross</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-crosshairs"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-crosshairs</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-crow"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-crow</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-crown"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-crown</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-crutch"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-crutch</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-cube"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-cube</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-cubes"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-cubes</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-cut"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-cut</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-database"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-database</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-deaf"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-deaf</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-democrat"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-democrat</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-desktop"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-desktop</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-dharmachakra"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-dharmachakra</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-diagnoses"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-diagnoses</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-dice"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-dice</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-dice-d20"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-dice-d20</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-dice-d6"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-dice-d6</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-dice-five"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-dice-five</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-dice-four"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-dice-four</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-dice-one"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-dice-one</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-dice-six"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-dice-six</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-dice-three"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-dice-three</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-dice-two"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-dice-two</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-digital-tachograph"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-digital-tachograph</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-directions"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-directions</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-disease"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-disease</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-divide"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-divide</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-dizzy"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-dizzy</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-dna"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-dna</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-dog"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-dog</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-dollar-sign"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-dollar-sign</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-dolly"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-dolly</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-dolly-flatbed"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-dolly-flatbed</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-donate"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-donate</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-door-closed"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-door-closed</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-door-open"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-door-open</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-dot-circle"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-dot-circle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-dove"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-dove</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-download"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-download</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-drafting-compass"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-drafting-compass</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-dragon"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-dragon</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-draw-polygon"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-draw-polygon</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-drum"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-drum</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-drum-steelpan"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-drum-steelpan</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-drumstick-bite"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-drumstick-bite</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-dumbbell"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-dumbbell</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-dumpster"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-dumpster</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-dumpster-fire"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-dumpster-fire</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-dungeon"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-dungeon</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-edit"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-edit</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-egg"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-egg</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-eject"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-eject</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-ellipsis-h"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-ellipsis-h</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-ellipsis-v"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-ellipsis-v</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-envelope"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-envelope</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-envelope-open"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-envelope-open</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-envelope-open-text"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-envelope-open-text</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-envelope-square"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-envelope-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-equals"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-equals</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-eraser"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-eraser</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-ethernet"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-ethernet</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-euro-sign"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-euro-sign</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-exchange-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-exchange-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-exclamation"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-exclamation</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-exclamation-circle"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-exclamation-circle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-exclamation-triangle"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-exclamation-triangle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-expand"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-expand</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-expand-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-expand-alt</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-expand-arrows-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-expand-arrows-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-external-link-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-external-link-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-external-link-square-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-external-link-square-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-eye"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-eye</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-eye-dropper"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-eye-dropper</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-eye-slash"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-eye-slash</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-fan"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-fan</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-fast-backward"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-fast-backward</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-fast-forward"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-fast-forward</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-faucet"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-faucet</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-fax"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-fax</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-feather"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-feather</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-feather-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-feather-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-female"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-female</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-fighter-jet"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-fighter-jet</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-file"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-file</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-file-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-file-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-file-archive"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-file-archive</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-file-audio"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-file-audio</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-file-code"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-file-code</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-file-contract"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-file-contract</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-file-csv"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-file-csv</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-file-download"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-file-download</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-file-excel"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-file-excel</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-file-export"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-file-export</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-file-image"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-file-image</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-file-import"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-file-import</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-file-invoice"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-file-invoice</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-file-invoice-dollar"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-file-invoice-dollar</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-file-medical"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-file-medical</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-file-medical-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-file-medical-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-file-pdf"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-file-pdf</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-file-powerpoint"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-file-powerpoint</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-file-prescription"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-file-prescription</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-file-signature"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-file-signature</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-file-upload"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-file-upload</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-file-video"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-file-video</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-file-word"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-file-word</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-fill"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-fill</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-fill-drip"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-fill-drip</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-film"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-film</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-filter"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-filter</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-fingerprint"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-fingerprint</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-fire"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-fire</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-fire-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-fire-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-fire-extinguisher"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-fire-extinguisher</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-first-aid"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-first-aid</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-fish"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-fish</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-fist-raised"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-fist-raised</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-flag"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-flag</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-flag-checkered"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-flag-checkered</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-flag-usa"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-flag-usa</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-flask"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-flask</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-flushed"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-flushed</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-folder"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-folder</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-folder-minus"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-folder-minus</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-folder-open"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-folder-open</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-folder-plus"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-folder-plus</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-font"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-font</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-font-awesome-logo-full"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-font-awesome-logo-full</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-football-ball"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-football-ball</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-forward"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-forward</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-frog"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-frog</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-frown"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-frown</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-frown-open"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-frown-open</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-funnel-dollar"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-funnel-dollar</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-futbol"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-futbol</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-gamepad"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-gamepad</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-gas-pump"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-gas-pump</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-gavel"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-gavel</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-gem"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-gem</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-genderless"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-genderless</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-ghost"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-ghost</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-gift"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-gift</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-gifts"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-gifts</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-glass-cheers"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-glass-cheers</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-glass-martini"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-glass-martini</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-glass-martini-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-glass-martini-alt</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-glass-whiskey"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-glass-whiskey</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-glasses"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-glasses</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-globe"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-globe</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-globe-africa"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-globe-africa</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-globe-americas"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-globe-americas</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-globe-asia"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-globe-asia</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-globe-europe"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-globe-europe</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-golf-ball"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-golf-ball</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-gopuram"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-gopuram</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-graduation-cap"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-graduation-cap</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-greater-than"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-greater-than</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-greater-than-equal"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-greater-than-equal</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-grimace"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-grimace</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-grin"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-grin</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-grin-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-grin-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-grin-beam"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-grin-beam</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-grin-beam-sweat"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-grin-beam-sweat</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-grin-hearts"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-grin-hearts</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-grin-squint"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-grin-squint</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-grin-squint-tears"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-grin-squint-tears</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-grin-stars"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-grin-stars</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-grin-tears"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-grin-tears</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-grin-tongue"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-grin-tongue</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-grin-tongue-squint"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-grin-tongue-squint</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-grin-tongue-wink"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-grin-tongue-wink</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-grin-wink"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-grin-wink</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-grip-horizontal"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-grip-horizontal</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-grip-lines"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-grip-lines</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-grip-lines-vertical"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-grip-lines-vertical</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-grip-vertical"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-grip-vertical</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-guitar"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-guitar</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-h-square"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-h-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hamburger"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hamburger</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hammer"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hammer</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hamsa"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hamsa</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hand-holding"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hand-holding</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hand-holding-heart"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hand-holding-heart</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hand-holding-medical"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hand-holding-medical</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hand-holding-usd"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hand-holding-usd</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hand-holding-water"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hand-holding-water</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hand-lizard"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hand-lizard</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hand-middle-finger"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hand-middle-finger</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hand-paper"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hand-paper</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hand-peace"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hand-peace</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hand-point-down"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hand-point-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hand-point-left"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hand-point-left</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hand-point-right"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hand-point-right</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hand-point-up"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hand-point-up</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hand-pointer"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hand-pointer</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hand-rock"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hand-rock</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hand-scissors"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hand-scissors</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hand-sparkles"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hand-sparkles</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hand-spock"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hand-spock</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hands"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hands</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hands-helping"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hands-helping</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hands-wash"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hands-wash</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-handshake"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-handshake</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-handshake-alt-slash"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-handshake-alt-slash</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-handshake-slash"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-handshake-slash</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hanukiah"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hanukiah</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hard-hat"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hard-hat</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hashtag"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hashtag</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hat-cowboy"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hat-cowboy</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hat-cowboy-side"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hat-cowboy-side</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hat-wizard"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hat-wizard</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hdd"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hdd</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-head-side-cough"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-head-side-cough</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-head-side-cough-slash"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-head-side-cough-slash</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-head-side-mask"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-head-side-mask</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-head-side-virus"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-head-side-virus</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-heading"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-heading</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-headphones"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-headphones</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-headphones-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-headphones-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-headset"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-headset</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-heart"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-heart</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-heart-broken"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-heart-broken</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-heartbeat"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-heartbeat</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-helicopter"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-helicopter</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-highlighter"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-highlighter</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hiking"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hiking</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hippo"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hippo</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-history"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-history</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hockey-puck"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hockey-puck</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-holly-berry"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-holly-berry</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-home"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-home</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-horse"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-horse</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-horse-head"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-horse-head</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hospital"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hospital</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hospital-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hospital-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hospital-symbol"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hospital-symbol</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hospital-user"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hospital-user</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hot-tub"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hot-tub</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hotdog"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hotdog</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hotel"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hotel</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hourglass"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hourglass</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hourglass-end"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hourglass-end</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hourglass-half"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hourglass-half</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hourglass-start"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hourglass-start</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-house-damage"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-house-damage</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-house-user"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-house-user</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-hryvnia"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-hryvnia</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-i-cursor"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-i-cursor</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-ice-cream"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-ice-cream</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-icicles"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-icicles</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-icons"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-icons</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-id-badge"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-id-badge</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-id-card"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-id-card</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-id-card-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-id-card-alt</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-igloo"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-igloo</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-image"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-image</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-images"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-images</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-inbox"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-inbox</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-indent"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-indent</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-industry"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-industry</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-infinity"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-infinity</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-info"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-info</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-info-circle"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-info-circle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-italic"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-italic</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-jedi"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-jedi</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-joint"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-joint</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-journal-whills"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-journal-whills</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-kaaba"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-kaaba</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-key"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-key</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-keyboard"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-keyboard</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-khanda"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-khanda</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-kiss"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-kiss</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-kiss-beam"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-kiss-beam</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-kiss-wink-heart"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-kiss-wink-heart</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-kiwi-bird"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-kiwi-bird</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-landmark"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-landmark</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-language"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-language</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-laptop"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-laptop</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-laptop-code"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-laptop-code</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-laptop-house"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-laptop-house</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-laptop-medical"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-laptop-medical</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-laugh"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-laugh</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-laugh-beam"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-laugh-beam</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-laugh-squint"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-laugh-squint</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-laugh-wink"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-laugh-wink</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-layer-group"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-layer-group</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-leaf"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-leaf</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-lemon"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-lemon</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-less-than"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-less-than</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-less-than-equal"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-less-than-equal</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-level-down-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-level-down-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-level-up-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-level-up-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-life-ring"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-life-ring</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-lightbulb"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-lightbulb</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-link"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-link</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-lira-sign"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-lira-sign</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-list"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-list</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-list-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-list-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-list-ol"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-list-ol</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-list-ul"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-list-ul</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-location-arrow"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-location-arrow</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-lock"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-lock</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-lock-open"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-lock-open</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-long-arrow-alt-down"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-long-arrow-alt-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-long-arrow-alt-left"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-long-arrow-alt-left</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-long-arrow-alt-right"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-long-arrow-alt-right</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-long-arrow-alt-up"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-long-arrow-alt-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-low-vision"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-low-vision</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-luggage-cart"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-luggage-cart</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-lungs"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-lungs</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-lungs-virus"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-lungs-virus</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-magic"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-magic</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-magnet"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-magnet</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-mail-bulk"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-mail-bulk</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-male"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-male</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-map"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-map</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-map-marked"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-map-marked</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-map-marked-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-map-marked-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-map-marker"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-map-marker</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-map-marker-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-map-marker-alt</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-map-pin"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-map-pin</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-map-signs"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-map-signs</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-marker"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-marker</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-mars"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-mars</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-mars-double"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-mars-double</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-mars-stroke"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-mars-stroke</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-mars-stroke-h"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-mars-stroke-h</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-mars-stroke-v"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-mars-stroke-v</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-mask"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-mask</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-medal"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-medal</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-medkit"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-medkit</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-meh"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-meh</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-meh-blank"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-meh-blank</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-meh-rolling-eyes"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-meh-rolling-eyes</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-memory"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-memory</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-menorah"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-menorah</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-mercury"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-mercury</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-meteor"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-meteor</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-microchip"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-microchip</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-microphone"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-microphone</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-microphone-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-microphone-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-microphone-alt-slash"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-microphone-alt-slash</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-microphone-slash"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-microphone-slash</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-microscope"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-microscope</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-minus"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-minus</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-minus-circle"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-minus-circle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-minus-square"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-minus-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-mitten"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-mitten</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-mobile"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-mobile</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-mobile-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-mobile-alt</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-money-bill"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-money-bill</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-money-bill-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-money-bill-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-money-bill-wave"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-money-bill-wave</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-money-bill-wave-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-money-bill-wave-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-money-check"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-money-check</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-money-check-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-money-check-alt</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-monument"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-monument</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-moon"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-moon</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-mortar-pestle"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-mortar-pestle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-mosque"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-mosque</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-motorcycle"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-motorcycle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-mountain"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-mountain</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-mouse"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-mouse</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-mouse-pointer"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-mouse-pointer</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-mug-hot"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-mug-hot</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-music"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-music</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-network-wired"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-network-wired</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-neuter"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-neuter</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-newspaper"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-newspaper</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-not-equal"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-not-equal</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-notes-medical"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-notes-medical</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-object-group"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-object-group</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-object-ungroup"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-object-ungroup</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-oil-can"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-oil-can</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-om"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-om</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-otter"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-otter</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-outdent"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-outdent</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-pager"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-pager</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-paint-brush"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-paint-brush</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-paint-roller"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-paint-roller</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-palette"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-palette</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-pallet"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-pallet</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-paper-plane"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-paper-plane</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-paperclip"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-paperclip</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-parachute-box"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-parachute-box</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-paragraph"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-paragraph</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-parking"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-parking</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-passport"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-passport</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-pastafarianism"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-pastafarianism</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-paste"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-paste</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-pause"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-pause</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-pause-circle"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-pause-circle</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-paw"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-paw</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-peace"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-peace</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-pen"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-pen</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-pen-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-pen-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-pen-fancy"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-pen-fancy</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-pen-nib"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-pen-nib</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-pen-square"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-pen-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-pencil-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-pencil-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-pencil-ruler"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-pencil-ruler</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-people-arrows"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-people-arrows</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-people-carry"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-people-carry</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-pepper-hot"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-pepper-hot</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-percent"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-percent</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-percentage"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-percentage</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-person-booth"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-person-booth</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-phone"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-phone</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-phone-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-phone-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-phone-slash"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-phone-slash</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-phone-square"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-phone-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-phone-square-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-phone-square-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-phone-volume"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-phone-volume</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-photo-video"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-photo-video</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-piggy-bank"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-piggy-bank</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-pills"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-pills</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-pizza-slice"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-pizza-slice</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-place-of-worship"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-place-of-worship</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-plane"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-plane</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-plane-arrival"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-plane-arrival</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-plane-departure"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-plane-departure</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-plane-slash"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-plane-slash</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-play"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-play</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-play-circle"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-play-circle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-plug"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-plug</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-plus"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-plus</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-plus-circle"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-plus-circle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-plus-square"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-plus-square</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-podcast"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-podcast</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-poll"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-poll</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-poll-h"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-poll-h</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-poo"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-poo</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-poo-storm"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-poo-storm</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-poop"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-poop</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-portrait"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-portrait</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-pound-sign"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-pound-sign</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-power-off"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-power-off</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-pray"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-pray</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-praying-hands"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-praying-hands</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-prescription"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-prescription</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-prescription-bottle"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-prescription-bottle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-prescription-bottle-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-prescription-bottle-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-print"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-print</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-procedures"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-procedures</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-project-diagram"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-project-diagram</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-pump-medical"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-pump-medical</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-pump-soap"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-pump-soap</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-puzzle-piece"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-puzzle-piece</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-qrcode"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-qrcode</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-question"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-question</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-question-circle"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-question-circle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-quidditch"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-quidditch</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-quote-left"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-quote-left</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-quote-right"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-quote-right</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-quran"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-quran</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-radiation"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-radiation</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-radiation-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-radiation-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-rainbow"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-rainbow</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-random"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-random</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-receipt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-receipt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-record-vinyl"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-record-vinyl</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-recycle"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-recycle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-redo"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-redo</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-redo-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-redo-alt</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-registered"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-registered</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-remove-format"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-remove-format</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-reply"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-reply</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-reply-all"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-reply-all</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-republican"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-republican</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-restroom"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-restroom</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-retweet"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-retweet</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-ribbon"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-ribbon</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-ring"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-ring</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-road"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-road</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-robot"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-robot</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-rocket"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-rocket</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-route"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-route</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-rss"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-rss</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-rss-square"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-rss-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-ruble-sign"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-ruble-sign</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-ruler"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-ruler</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-ruler-combined"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-ruler-combined</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-ruler-horizontal"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-ruler-horizontal</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-ruler-vertical"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-ruler-vertical</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-running"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-running</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-rupee-sign"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-rupee-sign</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-sad-cry"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-sad-cry</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-sad-tear"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-sad-tear</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-satellite"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-satellite</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-satellite-dish"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-satellite-dish</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-save"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-save</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-school"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-school</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-screwdriver"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-screwdriver</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-scroll"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-scroll</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-sd-card"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-sd-card</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-search"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-search</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-search-dollar"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-search-dollar</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-search-location"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-search-location</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-search-minus"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-search-minus</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-search-plus"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-search-plus</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-seedling"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-seedling</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-server"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-server</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-shapes"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-shapes</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-share"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-share</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-share-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-share-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-share-alt-square"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-share-alt-square</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-share-square"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-share-square</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-shekel-sign"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-shekel-sign</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-shield-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-shield-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-shield-virus"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-shield-virus</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-ship"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-ship</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-shipping-fast"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-shipping-fast</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-shoe-prints"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-shoe-prints</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-shopping-bag"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-shopping-bag</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-shopping-basket"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-shopping-basket</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-shopping-cart"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-shopping-cart</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-shower"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-shower</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-shuttle-van"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-shuttle-van</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-sign"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-sign</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-sign-in-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-sign-in-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-sign-language"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-sign-language</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-sign-out-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-sign-out-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-signal"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-signal</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-signature"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-signature</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-sim-card"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-sim-card</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-sink"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-sink</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-sitemap"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-sitemap</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-skating"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-skating</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-skiing"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-skiing</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-skiing-nordic"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-skiing-nordic</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-skull"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-skull</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-skull-crossbones"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-skull-crossbones</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-slash"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-slash</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-sleigh"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-sleigh</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-sliders-h"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-sliders-h</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-smile"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-smile</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-smile-beam"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-smile-beam</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-smile-wink"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-smile-wink</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-smog"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-smog</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-smoking"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-smoking</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-smoking-ban"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-smoking-ban</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-sms"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-sms</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-snowboarding"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-snowboarding</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-snowflake"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-snowflake</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-snowman"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-snowman</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-snowplow"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-snowplow</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-soap"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-soap</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-socks"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-socks</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-solar-panel"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-solar-panel</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-sort"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-sort</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-sort-alpha-down"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-sort-alpha-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-sort-alpha-down-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-sort-alpha-down-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-sort-alpha-up"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-sort-alpha-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-sort-alpha-up-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-sort-alpha-up-alt</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-sort-amount-down"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-sort-amount-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-sort-amount-down-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-sort-amount-down-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-sort-amount-up"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-sort-amount-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-sort-amount-up-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-sort-amount-up-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-sort-down"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-sort-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-sort-numeric-down"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-sort-numeric-down</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-sort-numeric-down-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-sort-numeric-down-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-sort-numeric-up"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-sort-numeric-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-sort-numeric-up-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-sort-numeric-up-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-sort-up"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-sort-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-spa"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-spa</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-space-shuttle"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-space-shuttle</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-spell-check"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-spell-check</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-spider"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-spider</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-spinner"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-spinner</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-splotch"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-splotch</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-spray-can"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-spray-can</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-square"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-square</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-square-full"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-square-full</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-square-root-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-square-root-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-stamp"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-stamp</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-star"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-star</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-star-and-crescent"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-star-and-crescent</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-star-half"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-star-half</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-star-half-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-star-half-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-star-of-david"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-star-of-david</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-star-of-life"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-star-of-life</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-step-backward"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-step-backward</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-step-forward"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-step-forward</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-stethoscope"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-stethoscope</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-sticky-note"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-sticky-note</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-stop"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-stop</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-stop-circle"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-stop-circle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-stopwatch"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-stopwatch</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-stopwatch-20"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-stopwatch-20</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-store"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-store</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-store-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-store-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-store-alt-slash"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-store-alt-slash</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-store-slash"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-store-slash</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-stream"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-stream</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-street-view"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-street-view</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-strikethrough"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-strikethrough</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-stroopwafel"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-stroopwafel</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-subscript"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-subscript</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-subway"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-subway</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-suitcase"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-suitcase</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-suitcase-rolling"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-suitcase-rolling</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-sun"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-sun</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-superscript"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-superscript</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-surprise"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-surprise</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-swatchbook"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-swatchbook</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-swimmer"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-swimmer</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-swimming-pool"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-swimming-pool</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-synagogue"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-synagogue</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-sync"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-sync</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-sync-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-sync-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-syringe"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-syringe</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-table"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-table</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-table-tennis"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-table-tennis</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-tablet"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-tablet</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-tablet-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-tablet-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-tablets"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-tablets</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-tachometer-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-tachometer-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-tag"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-tag</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-tags"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-tags</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-tape"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-tape</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-tasks"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-tasks</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-taxi"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-taxi</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-teeth"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-teeth</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-teeth-open"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-teeth-open</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-temperature-high"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-temperature-high</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-temperature-low"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-temperature-low</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-tenge"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-tenge</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-terminal"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-terminal</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-text-height"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-text-height</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-text-width"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-text-width</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-th"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-th</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-th-large"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-th-large</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-th-list"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-th-list</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-theater-masks"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-theater-masks</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-thermometer"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-thermometer</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-thermometer-empty"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-thermometer-empty</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-thermometer-full"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-thermometer-full</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-thermometer-half"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-thermometer-half</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-thermometer-quarter"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-thermometer-quarter</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-thermometer-three-quarters"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-thermometer-three-quarters</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-thumbs-down"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-thumbs-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-thumbs-up"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-thumbs-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-thumbtack"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-thumbtack</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-ticket-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-ticket-alt</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-times"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-times</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-times-circle"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-times-circle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-tint"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-tint</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-tint-slash"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-tint-slash</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-tired"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-tired</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-toggle-off"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-toggle-off</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-toggle-on"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-toggle-on</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-toilet"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-toilet</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-toilet-paper"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-toilet-paper</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-toilet-paper-slash"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-toilet-paper-slash</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-toolbox"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-toolbox</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-tools"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-tools</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-tooth"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-tooth</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-torah"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-torah</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-torii-gate"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-torii-gate</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-tractor"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-tractor</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-trademark"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-trademark</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-traffic-light"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-traffic-light</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-trailer"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-trailer</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-train"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-train</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-tram"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-tram</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-transgender"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-transgender</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-transgender-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-transgender-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-trash"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-trash</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-trash-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-trash-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-trash-restore"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-trash-restore</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-trash-restore-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-trash-restore-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-tree"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-tree</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-trophy"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-trophy</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-truck"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-truck</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-truck-loading"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-truck-loading</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-truck-monster"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-truck-monster</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-truck-moving"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-truck-moving</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-truck-pickup"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-truck-pickup</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-tshirt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-tshirt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-tty"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-tty</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-tv"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-tv</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-umbrella"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-umbrella</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-umbrella-beach"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-umbrella-beach</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-underline"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-underline</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-undo"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-undo</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-undo-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-undo-alt</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-universal-access"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-universal-access</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-university"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-university</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-unlink"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-unlink</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-unlock"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-unlock</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-unlock-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-unlock-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-upload"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-upload</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-user"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-user</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-user-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-user-alt</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-user-alt-slash"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-user-alt-slash</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-user-astronaut"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-user-astronaut</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-user-check"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-user-check</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-user-circle"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-user-circle</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-user-clock"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-user-clock</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-user-cog"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-user-cog</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-user-edit"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-user-edit</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-user-friends"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-user-friends</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-user-graduate"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-user-graduate</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-user-injured"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-user-injured</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-user-lock"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-user-lock</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-user-md"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-user-md</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-user-minus"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-user-minus</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-user-ninja"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-user-ninja</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-user-nurse"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-user-nurse</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-user-plus"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-user-plus</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-user-secret"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-user-secret</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-user-shield"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-user-shield</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-user-slash"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-user-slash</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-user-tag"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-user-tag</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-user-tie"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-user-tie</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-user-times"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-user-times</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-users"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-users</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-users-cog"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-users-cog</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-users-slash"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-users-slash</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-utensil-spoon"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-utensil-spoon</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-utensils"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-utensils</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-vector-square"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-vector-square</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-venus"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-venus</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-venus-double"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-venus-double</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-venus-mars"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-venus-mars</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-vial"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-vial</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-vials"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-vials</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-video"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-video</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-video-slash"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-video-slash</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-vihara"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-vihara</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-virus"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-virus</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-virus-slash"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-virus-slash</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-viruses"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-viruses</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-voicemail"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-voicemail</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-volleyball-ball"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-volleyball-ball</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-volume-down"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-volume-down</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-volume-mute"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-volume-mute</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-volume-off"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-volume-off</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-volume-up"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-volume-up</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-vote-yea"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-vote-yea</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-vr-cardboard"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-vr-cardboard</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-walking"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-walking</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-wallet"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-wallet</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-warehouse"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-warehouse</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-water"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-water</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-wave-square"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-wave-square</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-weight"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-weight</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-weight-hanging"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-weight-hanging</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-wheelchair"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-wheelchair</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-wifi"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-wifi</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-wind"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-wind</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-window-close"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-window-close</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-window-maximize"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-window-maximize</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-window-minimize"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-window-minimize</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-window-restore"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-window-restore</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-wine-bottle"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-wine-bottle</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-wine-glass"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-wine-glass</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-wine-glass-alt"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-wine-glass-alt</div>
            </div>
        </div>

        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-won-sign"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-won-sign</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-wrench"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-wrench</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-x-ray"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-x-ray</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-yen-sign"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-yen-sign</div>
            </div>
        </div>
        <div class="col-md-3 align-items-stretch chooseThisIcon">
            <div class="d-flex flex-grow-1 align-items-center bg-hover-light p-4 rounded">
                <div class="mr-4 flex-shrink-0 text-center iconStartHere " style="width: 40px;">
                    <i class="icon-xl fas fa-yin-yang"></i>
                </div>
                <div class="text-muted iconFAName">fas fa-yin-yang</div>
            </div>
        </div>
    </div>
</div>