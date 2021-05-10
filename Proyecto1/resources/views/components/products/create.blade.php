@extends('layouts.default')
@section('content')
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

 <div class="u-s-p-b-60">

                <!--====== Section Intro ======-->
                <div class="section__intro u-s-m-b-16">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary u-s-m-b-12">CREATE PRODUCT</h1>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                <form method='post' action="{{ route('products.store')}}" >
                                  @csrf
                                 
  <div class="form-group">
    <label for="name">Name</label>
    <input name="name" value="YouProduct" required type="text" class="form-control" id="name"  placeholder="ingrese nombre de producto">
  </div>

  <div class="form-group">
    <label for="description">Description</label>
    <textarea  required name ="description" class="form-control" id="description"  placeholder="ingrese descripcion del producto" rows="3">You Description Product
    </textarea>
  </div>

    <div class="form-group">
    <label for="price">Price</label>
    <input name="price" value="99999" required type="number" class="form-control"  placeholder="Enter Product Price">
  </div>

  <div class="form-group">
    <label for="stock">Stock</label>
    <input name="stock" value="99" required type="number" class="form-control" id="stock"  placeholder="Enter The Stock of The Product">
  </div>
  <div class="form-group">
    <label for="discount">Discount</label>
    <input name="discount" value="5" min="0"max="100" required type="number" class="form-control" id="stock"  placeholder="Enter Product Discount">
  </div>
  <div class="form-group">
    <label for="urlvideo">UrlVideo</label>
    <input name="urlvideo" value="https://www.youtube.com/embed/G1IbRujko-A?rel=0&amp;autoplay=1" required type="text" class="form-control" id="urlvideo" >
  </div>

  <div class="form-check">
  <input name="available" class="availabe" type="checkbox" value="" id="available">
  <label class="form-check-label" for="defaultCheck1">
    Availability
  </label>
  </div>
  <br>
  <div class="form-group">
    <label for="categorias">Select Product Category</label>
    <select name="categories[]" multiple class="form-control" id="categories">
    @foreach ($categories as $cat)
         <option value="{{ $cat->id }}">{{ $cat->name }}</option>
    @endforeach
    </select>
  </div>
  <div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <strong>Urlimage:</strong>
            <input type="text" name="images" class="form-control" placeholder="Insert Image Link Here" maxlength="50" value="https://caracoltv.brightspotcdn.com/dims4/default/3ed148c/2147483647/strip/true/crop/1148x797+0+0/resize/1200x833!/quality/90/?url=http%3A%2F%2Fcaracol-brightspot.s3.amazonaws.com%2Fd0%2F1f%2F88c08d3e4d51af7e07efa2ea5d0b%2Fgandalf.png">
        </div>
    </div>

   
    <div class="col-sm-12 text-center">
        <a href="javascript: history.go(-1)" class="btn btn-success">Cancel</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
  
 

</form>                         
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
   </div>             

@endsection