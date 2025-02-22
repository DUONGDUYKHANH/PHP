@extends('admin.main')

@section('noidung')
@if ($message = Session::get('success'))
  <div class="alert alert-success">
    <p>{{$message}}</p>
  </div>
  @endif

<table class="table table-striped projects">
              <thead>
                  <tr>
                      <th >
                          id
                     </th>
                      <th >
                          Product Name
                      </th>
                      <th >
                          Slug
                      </th>
                      <th>
                          catName
                      </th>
                      <th>
                          brandName
                      </th>
                      <th >
                          price
                      </th>
                      <th >
                          salePrice
                      </th>
                      <th >
                          image
                      </th>
                      <th >
                      	status
                      </th>
                      <th>
                      	Action
                      </th>
                  </tr>
              </thead>
              <tbody>
              	@foreach($products as $product)
                  <tr>
                      <td>
                      	{{$product->id}}
                      </td>
                      <td>
                      	{{$product->productName}}
                      </td>
                      <td>
                      	{{$product->slug}}
                      </td>
                      <td>
                      	{{$product->catName}}
                      </td>
                      <td>
                        {{$product->brandName}}
                      </td>
                      <td>
                        {{$product->price}}
                      </td>
                      <td>
                        {{$product->salePrice}}
                      </td>
                      <td>
                        {{$product->image}}
                      </td>       
                      <td>
                        @if($product->status==0)
                        <a href='#' class='btn btn-secondary'>Ẩn</a>
                        @elseif($product->status==1)
                        <a href='#' class='btn btn-primary'>Hiện</a>
                        @elseif($product->status==2)
                        <a href='#' class='btn btn-primary'>Trang chủ</a>
                        @endif
                      </td>
                      <td>
                        <a href="/admin/product/{{$product->id }}"><i class="far fa-eye"></i></a>
                        <a href="/admin/product/{{$product->id }}/edit"><i class="far fa-edit"></i></a>
                        <a href="/admin/product/{{$product->id }}/trash"><i class="fas fa-trash"></i></a>
                      </td>
                  </tr>
                  @endforeach
                  
                  
                  
                  
                  
                  
                  
              </tbody>
          </table>
          <div>{{$products->links()}}</div>

@endsection('noidung')