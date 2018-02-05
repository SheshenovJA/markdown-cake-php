<div id="main" role="main">

    <!-- RIBBON -->
    <div id="ribbon">

				<span class="ribbon-button-alignment">
					<span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh" rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true" data-reset-msg="Would you like to RESET all your saved widgets and clear LocalStorage?"><i class="fa fa-refresh"></i></span>
				</span>

        <!-- breadcrumb -->
        <?= $this->element('breadcrumb')?>
        <!-- end breadcrumb -->

        <!-- You can also add more buttons to the
        ribbon for further usability

        Example below:

        <span class="ribbon-button-alignment pull-right" style="margin-right:25px">
            <a href="#" id="search" class="btn btn-ribbon hidden-xs" data-title="search"><i class="fa fa-grid"></i> Change Grid</a>
            <span id="add" class="btn btn-ribbon hidden-xs" data-title="add"><i class="fa fa-plus"></i> Add</span>
            <button id="search" class="btn btn-ribbon" data-title="search"><i class="fa fa-search"></i> <span class="hidden-mobile">Search</span></button>
        </span> -->

    </div>
    <!-- END RIBBON -->

    <!-- #MAIN CONTENT -->
    <div id="content" style="opacity: 1;"><div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1 class="page-title txt-color-blueDark">
                    <i class="fa fa-pencil-square-o fa-fw "></i>
                    Site_name
                    <span>&gt;
				Редагувати сторінку
			</span>
                </h1>
            </div>
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
            </div>
        </div>

        <!-- widget grid -->
        <section id="widget-grid" class="">

            <!-- row -->

            <div class="row">
                <h1 class="text-center">Додати новий пост</h1>
                <!-- NEW WIDGET START -->
                <article class="col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">

                    <!-- Widget ID (each widget will need unique ID)-->
                    <div class="jarviswidget jarviswidget-color-purple" id="wid-id-2" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-fullscreenbutton="false" data-widget-sortable="false" role="widget">
                        <!-- widget options:
                        usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                        data-widget-colorbutton="false"
                        data-widget-editbutton="false"
                        data-widget-togglebutton="false"
                        data-widget-deletebutton="false"
                        data-widget-fullscreenbutton="false"
                        data-widget-custombutton="false"
                        data-widget-collapsed="true"
                        data-widget-sortable="false"

                        -->
                        <header role="heading"><div class="jarviswidget-ctrls" role="menu">     <a href="javascript:void(0);" class="button-icon jarviswidget-delete-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Delete"><i class="fa fa-times"></i></a></div>
                            <span class="widget-icon"> <i class="fa fa-pencil"></i> </span>
                            <h2>Markdown редактор</h2>

                            <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span></header>

                        <!-- widget div-->
                        <div role="content">

                            <!-- widget edit box -->
                            <div class="jarviswidget-editbox">
                                <!-- This area used as dropdown edit box -->

                            </div>
                            <!-- end widget edit box -->

                            <!-- widget content -->
                            <div class="widget-body no-padding">

                                <div class="md-editor" id="">
                                    <div class="md-header btn-toolbar">
                                        <form action="/admin/save" method="post">
                                            <input name="block_name" type="text" placeholder="Block name" style="width: 400px;" />
                                                <textarea id="mymarkdown" data-provide="markdown"
                                                   class="custom-scroll md-input"
                                                   style="max-height: 300px;
                                                    resize: none;"
                                                    name="data_markdown"
                                                    rows="14">
                                                </textarea>
                                                    <div class="md-footer">
                                                <button class="btn btn-success" data-provider="bootstrap-markdown" data-handler="cmdSave">
                                                    <i class="icon icon-white icon-ok"></i> Зберегти
                                                </button>
                                            </div>
                                        </form>

                                    <div class="md-fullscreen-controls"><a href="#" class="exit-fullscreen" title="Exit fullscreen">
                                            <span class="glyphicon glyphicon-fullscreen"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- end widget content -->

                        </div>
                        <!-- end widget div -->

                    </div>
                    <!-- end widget -->

                </article>
                <!-- WIDGET END -->
                <h1 class="text-center">Редагувати</h1>
                <?php if (!empty($posts)) { ?>
                <? foreach ($posts as $post) { ?>
                <article class="col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">

                    <!-- Widget ID (each widget will need unique ID)-->
                    <div class="jarviswidget jarviswidget-color-purple" id="wid-id-2" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-fullscreenbutton="false" data-widget-sortable="false" role="widget">
                        <!-- widget options:
                        usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                        data-widget-colorbutton="false"
                        data-widget-editbutton="false"
                        data-widget-togglebutton="false"
                        data-widget-deletebutton="false"
                        data-widget-fullscreenbutton="false"
                        data-widget-custombutton="false"
                        data-widget-collapsed="true"
                        data-widget-sortable="false"

                        -->
                        <header role="heading"><div class="jarviswidget-ctrls" role="menu">     <a href="javascript:void(0);" class="button-icon jarviswidget-delete-btn" rel="tooltip" title="" data-placement="bottom" data-original-title="Delete"><i class="fa fa-times"></i></a></div>
                            <span class="widget-icon"> <i class="fa fa-pencil"></i> </span>
                            <h2>Редагувати пост з іменем "<?= $post->block_name ?>"</h2>

                            <span class="jarviswidget-loader">
                                <i class="fa fa-refresh fa-spin"></i></span>
                        </header>

                        <!-- widget div-->
                        <div role="content">

                            <!-- widget edit box -->
                            <div class="jarviswidget-editbox">
                                <!-- This area used as dropdown edit box -->

                            </div>
                            <!-- end widget edit box -->

                            <!-- widget content -->
                            <div class="widget-body no-padding">

                                <div class="md-editor" id="">
                                    <div class="md-header btn-toolbar">
                                        <form action="/admin/save" method="post">
                                            <input name="block_name" type="text" placeholder="<?= $post->block_name ?>" style="width: 400px;" />
                                            <textarea id="mymarkdown" data-provide="markdown"
                                                      class="custom-scroll md-input"
                                                      style="max-height: 300px;
                                                    resize: none;"
                                                      name="data_markdown"
                                                      rows="14">
                                                <?= $post->content_mark ?>
                                                </textarea>
                                            <div class="md-footer">
                                                <button class="btn btn-success" data-provider="bootstrap-markdown" data-handler="cmdSave">
                                                    <i class="icon icon-white icon-ok"></i> Зберегти
                                                </button>
                                            </div>
                                        </form>

                                        <div class="md-fullscreen-controls"><a href="#" class="exit-fullscreen" title="Exit fullscreen">
                                                <span class="glyphicon glyphicon-fullscreen"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end widget content -->

                            </div>
                            <!-- end widget div -->

                        </div>
                        <!-- end widget -->

                </article>
                    <?php }?>
                <?php }?>


                <!-- WIDGET END -->

            </div>

            <!-- end row -->

        </section>
        <!-- end widget grid -->


        <?php $this->append('pageScript'); ?>
        <script src="/admin/js/plugin/summernote/summernote.js"></script>
        <script src="/admin/js/plugin/markdown/markdown.js"></script>
        <script src="/admin/js/plugin/markdown/to-markdown.js"></script>
        <script src="/admin/js/plugin/markdown/bootstrap-markdown.js"></script>


        <script>

            /* DO NOT REMOVE : GLOBAL FUNCTIONS!
             *
             * pageSetUp(); WILL CALL THE FOLLOWING FUNCTIONS
             *
             * // activate tooltips
             * $("[rel=tooltip]").tooltip();
             *
             * // activate popovers
             * $("[rel=popover]").popover();
             *
             * // activate popovers with hover states
             * $("[rel=popover-hover]").popover({ trigger: "hover" });
             *
             * // activate inline charts
             * runAllCharts();
             *
             * // setup widgets
             * setup_widgets_desktop();
             *
             * // run form elements
             * runAllForms();
             *
             ********************************
             *
             * pageSetUp() is needed whenever you load a page.
             * It initializes and checks for all basic elements of the page
             * and makes rendering easier.
             *
             */

            pageSetUp();

            // PAGE RELATED SCRIPTS

            // pagefunction

            var pagefunction = function() {

                // summernote
                $('.summernote').summernote({
                    height: 200,
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'italic', 'underline', 'clear']],
                        ['fontname', ['fontname']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['height', ['height']],
                        ['table', ['table']],
                        ['insert', ['link', 'picture', 'hr']],
                        ['view', ['fullscreen', 'codeview', 'help']]

                    ]
                });

                // markdown
                $("#mymarkdown").markdown({
                    autofocus:false,
                    savable:true
                })

            };

            // end pagefunction

            // destroy generated instances
            // pagedestroy is called automatically before loading a new page
            // only usable in AJAX version!

            var pagedestroy = function(){

                // destroy summernote
                $(".summernote").summernote( 'destroy' );

                //destroy markdown
                $("#mymarkdown").markdown( 'destroy' );

                // debug msg
                if (debugState){
                    root.console.log("✔ Summernote and Markdown editors destroyed");
                }

            }

            // end destroy
        </script>
        <?php $this->end() ?>

    <!-- END #MAIN CONTENT -->
