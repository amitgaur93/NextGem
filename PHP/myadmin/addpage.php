<?php
require_once './include/header.php';
?>

<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="dashboard.php">Home</a>
                </li>
                <li>
                    <i class="menu-icon fa fa-desktop"></i>
                    <a href="#">Pages</a>
                </li>
                <li class="active">Add Page</li>
            </ul><!-- /.breadcrumb -->

            <div class="nav-search" id="nav-search">
                <form class="form-search">
                    <span class="input-icon">
                        <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                        <i class="ace-icon fa fa-search nav-search-icon"></i>
                    </span>
                </form>
            </div><!-- /.nav-search -->
        </div>

        <div class="page-content">
            <div class="page-header">
                <h1>
                    Add Page
                </h1>
            </div><!-- /.page-header -->
            <div>
                <form class="form-horizontal" action="savepage.php" method="POST">
                    <div class="form-group">
                        <label class="col-sm-1" for="pagetitle"> Page Title </label>
                        <input type="text" id="pagetitle" name="pagetitle" placeholder="Page Title" class="col-sm-5"/>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-1" for="pageurl"> Page url </label>
                        <input type="text" id="pageurl" name="pageurl" placeholder="Page URL" class="col-sm-5"/>
                    </div>

                    <div class="form-group">
                        <label for="pageContent">Page Content</label>
                        <div class="widget-box widget-color-blue">
                            <div class="widget-header widget-header-small">  </div>

                            <div class="widget-body">
                                <div class="widget-main no-padding">
                                    <textarea name="content" data-provide="markdown" data-iconlibrary="fa" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-success">
                            Submit
                            <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div><!-- /.page-content -->
    </div>
</div>

<!-- page specific plugin scripts -->
<script src="assets/js/jquery-2.1.4.min.js"></script>
<script src="assets/js/jquery-ui.custom.min.js"></script>
<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="assets/js/markdown.min.js"></script>
<script src="assets/js/bootstrap-markdown.min.js"></script>
<script src="assets/js/jquery.hotkeys.index.min.js"></script>
<script src="assets/js/bootstrap-wysiwyg.min.js"></script>
<script src="assets/js/bootbox.js"></script>

<!-- ace scripts -->
<script src="assets/js/ace-elements.min.js"></script>
<script src="assets/js/ace.min.js"></script>

<script>
    jQuery(function($) {
        function showErrorAlert(reason, detail) {
            var msg = '';
            if (reason === 'unsupported-file-type') {
                msg = "Unsupported format " + detail;
            }
            else {
                //console.log("error uploading file", reason, detail);
            }
            $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
                    '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
        }
        $('textarea[data-provide="markdown"]').each(function() {
            var $this = $(this);

            if ($this.data('markdown')) {
                $this.data('markdown').showEditor();
            }
            else
                $this.markdown()

            $this.parent().find('.btn').addClass('btn-white');
        })

    });
</script>


<?php
require_once './include/footer.php';
?> 