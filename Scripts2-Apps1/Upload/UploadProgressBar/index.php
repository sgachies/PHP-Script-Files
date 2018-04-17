<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>JavaScript Tutorial [9]</title>
        <meta http-equiv="content-type" content="text/html; charset = utf-8"/>
        <link rel="stylesheet" media="screen" href="styles.css"/>
    </head>
    <body>
        <div id="title" class="commonWidth">
            <span>JavaScript Tutorial [9] - Progress Bar (Enhanced with PHP)</span>
        </div>
        <div id="form_container" class="commonWidth">
            <form id="upload_form" action="#" method="post" enctype="multipart/form-data">
                <p>
                    <input type="file" id="upload_file" size="35"/>
                    <input type="button" id="upload_btn" value="Upload File"/>
                </p>
            </form>
        </div>
        <div id="progress_bar_container" class="commonWidth displayNone" >
            <div id="progress_bar"></div>
        </div>
        <div class="commonWidth">
        <center><span id="status"></center>
        </div>
        <script type="text/javascript" src="progressbar.js"></script>
    </body>
</html>