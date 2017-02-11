<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel 5.3 Dynamic Dropdown with AJAX</title>
</head>
<body style="width: 900px; margin: 0 auto">
<div style="width: 900px; margin: 50px auto; align-self: center">
<h2 style="width: 500px; margin: 50px auto; text-align: center">Laravel 5.3 Dynamic Dropdown w/ AJAX</h2>
<span>Product Category: </span>
<select style="width: 200px" class="productcategory" id="prod_cat_id">
    <option value="0" disabled selected>Select A Category</option>
    @foreach($prod as $cat)
        <option value="{{$cat->id}}">{{$cat->product_cat_name}}</option>
    @endforeach
</select>
<span>Product Name: </span>
<select style="width: 200px" class="productname">
    <option value="0" disabled selected>Product Name</option>
</select>

<span>Product Price: </span>
<input type="text" class="prod_price">
</div>
<script src="{{ asset('js/jquery-3.1.1.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {

        $(document).on('change', '.productcategory', function () {
            //console.log("hmm, it changed");
            var cat_id = $(this).val();
            //console.log(cat_id);
            var div = $(this).parent();

            var op = " ";

            $.ajax({
                type: 'get',
                url: '{!!URL::to('findProductName')!!}',
                data: {'id': cat_id},
                success: function (data) {
                    console.log('success');

                    console.log(data);

                    console.log(data.length);
                    op += '<option value="0" selected disabled>Choose A Product</option>';
                    for (var i = 0; i < data.length; i++) {
                        op += '<option value="' + data[i].id + '">' + data[i].productname + '</option>';
                    }

                    div.find('.productname').html(" ");
                    div.find('.productname').append(op);
                },
                error: function () {

                }
            });
        });
        $(document).on('change','.productname',function () {
            var prod_id=$(this).val();

            var a=$(this).parent();
            console.log(prod_id);
            var op="";
            $.ajax({
                type:'get',
                url:'{!!URL::to('findPrice')!!}',
                data:{'id':prod_id},
                dataType:'json',//return data will be json
                success:function(data){
                    console.log("price");
                    console.log(data.price);

                    // here price is coloumn name in products table data.coln name

                    a.find('.prod_price').val(data.price);

                },
                error:function(){

                }
            });
        });
    });
</script>

</body>
</html>
