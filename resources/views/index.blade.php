<!DOCTYPE html>
<!-- saved from url=(0053)https://v4-alpha.getbootstrap.com/examples/jumbotron/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Expert System</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3 text-center">Welcome To Issue Expert</h1>
        <p class="text-center">This is a simple expert system designed to help computer users detech issues with either their hardware or software problems</p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 heading-padding">
            <h2 class="text-center">Issue Identification</h2>
        </div>
        <hr>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h2>Type of Issue</h2>
            <a href="" class="btn btn-info type" data-id="1">Software</a>
            <br>
            <a href="" class="btn btn-success type" data-id="2">Hardware</a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h2>Category</h2>
            <ul style="list-style-type: none;display: none; overflow: hidden" id="category">
            </ul>
       </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h2>Symptoms</h2>
            <div style="display: none; overflow: hidden" id="symptoms">
            </div>
        </div>
      </div>

      <hr>

      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 heading-padding">
            <h2 class="text-center">Solution Identification</h2>
        </div>
        <hr>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h2>Problem</h2>
            <div style="display: none" id="problems">
                
            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
          <h2>Solution</h2>
            <div style="display: none; overflow: hidden" id="solution">
            </div>
        </div>
      </div>

      <hr>

      <footer>
        <p class="text-center">&copy; Issues Expert System 2017. All Rights Reserved.</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"</script>
    <script src="js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript">
        $(".type").click(function(e){
            e.preventDefault();
            $.ajax({
                url: '/type/'+$(this).attr('data-id')+'/category',
                dataType: 'json',
                type: 'GET',
                success: function success(data) {
                  // updating the dom
                  if (data.status == 'success') {
                    // update the dom
                    var toAppend = "";
                    for(i=0;i<data.data.length;i++) {
                        toAppend = toAppend + '<li><a href="" class="category" data-id="'+data.data[i]['id']+'">'+data.data[i]['title']+'</a></li>';
                    }
                    $('#category').show().html(toAppend);
                  }
                  else {
                    alert(data.message);
                  }
                },
                error: function error(data) {}
            });
        });
        $("#category").on('click','.category',function(e){
            e.preventDefault();
            $.ajax({
                url: '/category/'+$(this).attr('data-id')+'/symptoms',
                dataType: 'json',
                type: 'GET',
                success: function success(data) {
                  // updating the dom
                  if (data.status == 'success') {
                    // update the dom
                    var toAppend = "<form class='form'";
                    for(i=0;i<data.data.length;i++) {
                        toAppend = toAppend + '<div class="col-md-12"><input type="checkbox" class="col-md-2 col-xs-2" name="symptoms[]" value='+data.data[i]['id']+'> <label class="col-md-10 col-xs-12 pull-right" style="overflow:hidden">'+data.data[i]['title']+'</label></div>';
                    }
                    toAppend = toAppend + '<button class="btn btn-primary symptoms">Find Problem</button>'+
                    '</form>';
                    $('#symptoms').show().html(toAppend);
                  }
                  else {
                    alert(data.message);
                  }
                },
                error: function error(data) {}
            });
        });
        $("#symptoms").on('click','.symptoms',function(e){
            e.preventDefault();
            var formData = $('form').serializeArray();
            console.log(formData);
            $.ajax({
                url: '/symptoms/problems',
                data: formData,
                dataType: 'json',
                type: 'GET',
                success: function success(data) {
                  // updating the dom
                  if (data.status == 'success') {
                    // updating the dom
                    toAppend = '<p>This is a very big problem now. It would not be asyi sdk hjbkjhfk ajhbj efjqwbab hjvjdvsa ahjsdbjahbs asjb </p>'+
                                '<a href="" class="problems" data-id="'+data.data.id+'">Show solution</a>';
                    $('#problems').show().html(toAppend);
                  }
                  else {
                    alert(data.message);
                  }
                },
                error: function error(data) {}
            });
            $('#problems').show();
        });
        $("#problems").on('click','.problems',function(e){
            e.preventDefault();
            $.ajax({
                url: '/problems/'+$(this).attr('data-id')+'/solution',
                dataType: 'json',
                type: 'GET',
                success: function success(data) {
                  // updating the dom
                  if (data.status == 'success') {
                    var toAppend = "";
                    for(i=0;i<data.data.length;i++) {
                        toAppend = toAppend + '<p>'+data.data[i]['title']+'</p>';
                        console.log(toAppend);
                    }
                    $('#solution').show().html(toAppend);
                  }
                  else {
                    alert(data.message);
                  }
                },
                error: function error(data) {}
            });
        });
    </script>

</body></html>