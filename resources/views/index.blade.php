<!DOCTYPE html>
<!-- saved from url=(0053)https://v4-alpha.getbootstrap.com/examples/jumbotron/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>pcAdvisory</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

  </head>
  <body>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <div class="centralize">
          <img src="img/logo.png" class="img img-responsive" alt="pcAdvisory"></div>
        <p class="text-center">This is a simple expert system designed to help computer users detech issues with either their hardware or software problems</p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="col-md-8 offset-md-2">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 heading-padding">
              <h2 class="text-center">Issue Identification</h2>
              <hr class="for-h2">
          </div>
          <hr>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <h5>Type of Issue</h5>
              <a href="" class="btn btn-info type" data-id="1">Software</a>
              <a href="" class="btn btn-success type pull-right" data-id="2">Hardware</a>
          </div>
        </div>
        <hr>
        <div class="margin20"">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h5>Category</h5>
                <ol id="category"></ol>
            </div>
          </div>
        </div>
        <hr>
        <div class="margin20"">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h5>Symptoms</h5>
                <div id="symptoms"></div>
            </div>
          </div>
        </div>
        <hr>
        <section alt="Solution Identification">
          <div class="margin20"">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <h5>Problem</h5>
                  <div id="problems"></div>
              </div>
            </div>
          </div>
          <hr>
          <div class="margin20"">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <h5>Solution</h5>
                  <div id="solution"></div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <hr>
      <footer>
        <p class="text-center">&copy; pcAvisory System 2017. All Rights Reserved.</p>
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
        $(document).ready(function(e){
          $('#category').hide();
          $('#symptoms').hide();
          $('#problems').hide();
          $('#solution').hide();
        });
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
                    if(data.data.length > 0)
                    {
                      for(i=0;i<data.data.length;i++) {
                          toAppend = toAppend + '<li><a href="" class="category" data-id="'+data.data[i]['id']+'">'+data.data[i]['title']+'</a></li>';
                      }
                    }
                    else{
                      toAppend = '<h4><strong>No category found</strong></h4>';
                    }
                    $('#category').show().html(toAppend);
                    $('#symptoms').hide();
                    $('#problems').hide();
                    $('#solution').hide();
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
                    var toAppend = "<form class='form'>";
                    for(i=0;i<data.data.length;i++) {
                        toAppend = toAppend + '<div class="form-inline"><input type="checkbox" class="right-10" name="symptoms[]" value='+data.data[i]['id']+'><label style="overflow:hidden">'+data.data[i]['title']+'</label></div>';
                    }
                    if(data.data.length > 0)
                    {
                        toAppend = toAppend + '<button class="btn btn-primary symptoms">Find Problem</button>';
                    }
                    else 
                    {
                        toAppend = toAppend + '<h4 class="text-center"><strong>No symptoms found</strong></h4>';
                    }
                    toAppend = toAppend + '</form>';
                    $('#symptoms').show().html(toAppend);
                    $('#problems').hide();
                    $('#solution').hide();
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
                    toAppend = '<p>'+data.data.title+'</p>'+
                                '<a href="" class="btn btn-primary problems" data-id="'+data.data.id+'">Show solution</a>';
                    $('#problems').show().html(toAppend);
                    $('#solution').hide();
                  }
                  else {
                    alert(data.message);
                  }
                },
                error: function error(data) {}
            });
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
                        toAppend = toAppend + '<p class="box"><strong>Probable Solution '+(i+1)+':</strong><br>'+data.data[i]['title']+'</p>';
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