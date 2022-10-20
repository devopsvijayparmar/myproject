<!DOCTYPE html>
<html lang="en">
     <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Landing Page - Landing Page Editor</title>
        <link rel="stylesheet" type="text/css" href="{{asset('keditor-master/examples/plugins/bootstrap-3.4.1/css/bootstrap.min.css')}}" data-type="keditor-style" />
        <link rel="stylesheet" type="text/css" href="{{asset('keditor-master/examples/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" data-type="keditor-style" />
        <!-- Start of KEditor styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('keditor-master/dist/css/keditor.css')}}" data-type="keditor-style" />
        <link rel="stylesheet" type="text/css" href="{{asset('/keditor-master/dist/css/keditor-components.css')}}" data-type="keditor-style" />
        <!-- End of KEditor styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('keditor-master/examples/plugins/code-prettify/src/prettify.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('keditor-master/examples/css/examples.css')}}" />
    </head>
    
    <body>
        <div data-keditor="html">
            <div id="content-area">
                <section id="existing-id" class="my-class">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6" data-type="container-content">
                                <section data-type="component-text">
                                    <div class="page-header">
                                        <h1><b class="text-uppercase">Welcome to Landing Page</b>
                                        </h1>
                                
                                        <p class="lead">
                                            <em>Use the Visual Page Editor to edit content like text, images, grids, and other elements using the powerful drag-and-drop positioning. It is very time-saving as it requires no coding to design any websites.</em>
                                        </p>
                                    </div>
                                </section>
                                <section data-type="component-form">
                                    <div class="form-data" style="display: none !important;">[{"type":"text","label":"Your email","placeholder":"Please enter your email address","className":"form-control","name":"text-1561978528572","subtype":"text"},{"type":"button","label":"Subscribe","subtype":"button","className":"btn btn-primary","name":"button-1561978530984","style":"primary"}]</div>
                                    <form class="form-content form-horizontal" data-grid="3-9">
                                        <div class="fb-text form-group field-text-1561978528572"><label for="text-1561978528572" class="fb-text-label control-label col-sm-3">Your email</label>
                                            <div class="col-sm-9"><input type="text" placeholder="Please enter your email address" class="form-control" name="text-1561978528572" id="text-1561978528572"></div>
                                        </div>
                                        <div class="fb-button form-group field-button-1561978530984">
                                            <div class="col-sm-9 col-sm-offset-3"><button type="button" class="btn btn-primary" name="button-1561978530984" style="primary" id="button-1561978530984">Subscribe</button></div>
                                        </div>
                                    </form>
                                </section>
                            </div>
                            <div class="col-sm-6" data-type="container-content">
                                <section data-type="component-photo">
                                    <div class="photo-panel">
                                        <img src="{{asset('keditor-master/examples/snippets/img/somewhere_bangladesh.jpg')}}" style="display: inline-block;" height="" width="100%">
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        
        <script type="text/javascript" src="{{asset('keditor-master/examples/plugins/jquery-1.11.3/jquery-1.11.3.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('keditor-master/examples/plugins/bootstrap-3.4.1/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('keditor-master/examples/plugins/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('keditor-master/examples/plugins/ckeditor-4.11.4/ckeditor.js')}}"></script>
        <script type="text/javascript" src="{{asset('keditor-master/examples/plugins/formBuilder-2.5.3/form-builder.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('keditor-master/examples/plugins/formBuilder-2.5.3/form-render.min.js')}}"></script>
        <!-- Start of KEditor scripts -->
        <script type="text/javascript" src="{{asset('keditor-master/dist/js/keditor.js')}}"></script>
        <script type="text/javascript" src="{{asset('keditor-master/dist/js/keditor-components.js')}}"></script>
        <!-- End of KEditor scripts -->
        <script type="text/javascript" src="{{asset('keditor-master/examples/plugins/code-prettify/src/prettify.js')}}"></script>
        <script type="text/javascript" src="{{asset('keditor-master/examples/plugins/js-beautify-1.7.5/js/lib/beautify.js')}}"></script>
        <script type="text/javascript" src="{{asset('keditor-master/examples/plugins/js-beautify-1.7.5/js/lib/beautify-html.js')}}"></script>
        <script type="text/javascript" src="{{asset('keditor-master/examples/js/examples.js"></script>
         <script type="text/javascript" data-keditor="script">
            $(function () {
                $('#content-area').keditor();
            });
            function testGetc() {
                return $('#content-area').keditor('getContent');
            }
        </script>
    </body>
</html>
