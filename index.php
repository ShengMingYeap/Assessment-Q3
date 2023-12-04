<html>
    <head>
        <title>Question 3</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    </head>

    <body>

        <style>
            .input-group-append {
                cursor: pointer;
            }
        </style>

        <div class="container" style="margin-top:60px;">
            <form action="index.php" method="GET" class="mb-5">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="input-group date datepicker" id="datepicker" data-date-format="dd-mm-yyyy">
                            <label class="form-label w-100" for="date1">Start Date</label>
                            <input type="text" name="date1" value="<?php echo (!empty($_GET['date1'])) ? $_GET['date1']: '';?>" class="form-control" id="date1"/>
                            <span class="input-group-append">
                                <span class="input-group-text bg-light h-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z"/></svg>
                                </span>
                            </span>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="form-label w-100" for="date2">End Date</label>
                        <div class="input-group date datepicker" id="datepicker" data-date-format="dd-mm-yyyy">
                            <input type="text" name="date2" class="form-control" value="<?php echo (!empty($_GET['date2'])) ? $_GET['date2']: '';?>" id="date2"/>
                            <span class="input-group-append">
                                <span class="input-group-text bg-light h-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z"/></svg>
                                </span>
                            </span>
                        </div>
                    </div>                   
                </div>
                <br>
                <input type="submit" value="Submit" class="btn btn-primary float-end">
            </form>
            <?php
                if(!empty($_GET["date1"]) && !empty($_GET["date2"])){
                    $date1 = new DateTime($_GET["date1"]);
                    $date2 = new DateTime($_GET["date2"]);
                    $dateDiff = $date1->diff($date2);
                    $getDateDiff = (int)$dateDiff->days;
                    echo "<div><b>".$getDateDiff." Day(s)</b></div>";
                    function check($getDateDiff){ 
                        if($getDateDiff % 2 == 0){ 
                            echo "<b>Even</b>";  
                        } 
                        else{ 
                            echo "<b>Odd</b>"; 
                        } 
                    } 
                    check($getDateDiff);
                }else{
                    echo "<div class='alert alert-danger'>Please select date.</div>";
                }
            ?>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
        <script>
            $(function(){
                $('.datepicker').datepicker({  
                    autoclose: true,  
                    todayHighlight: true, 
                });
            });
        </script>

    </body>
</html>