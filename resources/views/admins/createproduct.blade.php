@extends('layouts/admins/master')
@section('header')
	<style type="text/css">
		img {   
			max-width: 100%;
		}
 
		.preview {  
		display: -webkit-box;   
		display: -webkit-flex;  
		display: -ms-flexbox;   
		display: flex;  
		-webkit-box-orient: vertical;   
		-webkit-box-direction: normal;  
		-webkit-flex-direction: column; 
		-ms-flex-direction: column; 
		flex-direction: column;
		} 
		 
		.preview-pic {  
		-webkit-box-flex: 1;    
		-webkit-flex-grow: 1;   
		-ms-flex-positive: 1;   
		flex-grow: 1;
		}
		 
		.preview-thumbnail.nav-tabs {   
		border: none;   
		margin-top: 15px;
		}
		 
		.preview-thumbnail.nav-tabs li {    
		width: 18%; 
		margin-right: 2.5%;
		}
		 
		.preview-thumbnail.nav-tabs li img {    
		max-width: 100%;    
		display: block;
		}
		 
		.preview-thumbnail.nav-tabs li a {  
		padding: 0; 
		margin: 0;  
		cursor:pointer;
		}
		 
		.preview-thumbnail.nav-tabs li:last-of-type {   
		margin-right: 0;
		}
		 
		.tab-content {  
		overflow: hidden;
		}
		 
		.tab-content img {  
		width: 100%;    
		-webkit-animation-name: opacity;    
		animation-name: opacity; 
		-webkit-animation-duration: .3s; 
		animation-duration: .3s;
		}
		 
		.card { 
		margin-top: 0px;    
		background: #eee;   
		padding: 3em;   
		line-height: 1.5em;
		} 
		 
		.details {  
		display: -webkit-box;
		    display: -webkit-flex;  
		display: -ms-flexbox;   
		display: flex;  
		-webkit-box-orient: vertical;   
		-webkit-box-direction: normal;  
		-webkit-flex-direction: column; 
		-ms-flex-direction: column; 
		flex-direction: column;
		}
		 
		.colors {   
		-webkit-box-flex: 1;    
		-webkit-flex-grow: 1;   
		-ms-flex-positive: 1;   
		flex-grow: 1;
		}
		 
		.product-title, .price, .sizes, .colors {   
		text-transform: UPPERCASE;  
		font-weight: bold;
		}
		 
		.checked, .price span { 
		color: #ff9f1a;
		}
		 
		.product-title, .rating, .product-description, .price, .vote, .sizes {  
		margin-bottom: 15px;
		}
		 
		.product-title {    
		margin-top: 0;
		}
		 
		.size {
		    margin-right: 10px;
		}
		 
		.size:first-of-type {   
		margin-left: 40px;
		}
		 
		.color {    
		display: inline-block;  
		vertical-align: middle; 
		margin-right: 10px; 
		height: 2em;    
		width: 2em; 
		border-radius: 2px;
		}
		 
		.color:first-of-type {  
		margin-left: 20px;
		}
		 
		.add-to-cart, .like {   
		background: #ff9f1a;    
		padding: 1.2em 1.5em;   
		border: none;   
		text-transform: UPPERCASE;  
		font-weight: bold;  
		color: #fff;    
		text-decoration:none; 
		-webkit-transition: background .3s ease; 
		transition: background .3s ease;
		}
		 
		.add-to-cart:hover, .like:hover {   
		background: #b36800;    
		color: #fff;    
		text-decoration:none;
		}
		 
		.not-available {    
		text-align: center; 
		line-height: 2em;
		}
		 
		.not-available:before { 
		font-family: fontawesome;   
		content: "\f00d";   
		color: #fff;
		}
		 
		.orange {   
		background: #ff9f1a;
		}
		 
		.green {    
		background: #85ad00;
		}
		 
		.blue { 
		background: #0076ad;
		}
		 
		.tooltip-inner {    
		padding: 1.3em;
		} 

	</style>
@endsection

@section('content')
	<div class="content">
		<div id="page-wrapper">
			<div class="container"> 
				<div class="card"> 
				  	<div class="container-fliud"> 
				   		<div class="wrapper row"> 
				    		<div class="preview col-md-6"> 
				     			<div class="preview-pic tab-content"> 
				      				<div class="tab-pane active" id="pic-1">
				      					<img src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_productdetail/images/doboafnuoicon_1.jpg" alt="">
				      				</div> 
				      				<div class="tab-pane" id="pic-2">
				      					<img src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_productdetail/images/doboafnuoicon_4.jpg" alt="Học thiết kế web bán hàng Online">
							      	</div> 
								    <div class="tab-pane" id="pic-3">
								    	<img src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_productdetail/images/doboafnuoicon_5.jpg" alt="Học thiết kế web bán hàng Online">
								    </div> 
								    <div class="tab-pane" id="pic-4">
								    	<img src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_productdetail/images/doboafnuoicon_6.jpg" alt="Học thiết kế web bán hàng Online">
								    </div> 
								    <div class="tab-pane" id="pic-5">
								    	<img src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_productdetail/images/doboafnuoicon_7.jpg" alt="Học thiết kế web bán hàng Online">
								    </div> 
				     			</div> 
					     		<ul class="preview-thumbnail nav nav-tabs">
							    	<li class="active">
							    		<a data-target="#pic-1" data-toggle="tab">
							    			<img src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_productdetail/images/doboafnuoicon_1.jpg" alt="Học thiết kế web bán hàng Online">
							    		</a>
							      	</li> 
							      	<li>
							      		<a data-target="#pic-2" data-toggle="tab">
							      			<img src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_productdetail/images/doboafnuoicon_4.jpg" alt="Học thiết kế web bán hàng Online">
							      		</a>
							      	</li> 
							      	<li>
							      		<a data-target="#pic-3" data-toggle="tab">
							      			<img src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_productdetail/images/doboafnuoicon_5.jpg" alt="Học thiết kế web bán hàng Online">
							      		</a>
							      	</li> 
							      	<li>
							      		<a data-target="#pic-4" data-toggle="tab">
							      			<img src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_productdetail/images/doboafnuoicon_6.jpg" alt="Học thiết kế web bán hàng Online">
							      		</a>
							      	</li> 
							      	<li>
							      		<a data-target="#pic-5" data-toggle="tab">
							      			<img src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_productdetail/images/doboafnuoicon_7.jpg" alt="Học thiết kế web bán hàng Online">
							      		</a>
							      	</li> 
					     		</ul> 
					    	</div> 
						    <div class="details col-md-6"> 
						     	<h3 class="product-title">Thời trang cho bé trai nhiều màu sắc ngộ nghĩnh</h3> 
						     	<div class="rating"> 
						      		<div class="stars"> 
						      			<span class="fa fa-star checked"></span> 
						      			<span class="fa fa-star checked"></span> 
						      			<span class="fa fa-star checked"></span> 
						      			<span class="fa fa-star"></span> 
						      			<span class="fa fa-star"></span> 
						      		</div>
						      		<span class="review-no">123 đánh giá</span> 
						     	</div> 
						     	<p class="product-description">Với trang phục này mẹ có thể cùng bé diện đi chơi, đi học đều rất phù hợp. Khi bé mặc vào, chắc chắn mẹ sẽ có cảm nhận hoàn toàn khác biệt vì màu sắc phong phú không chỉ khiến bộ trang phục trở nên bắt mắt mà còn tôn thêm vẻ nhí nhảnh, nghịch ngợm và năng động của các bé trai.            Khi diện những bộ thời trang cho bé trai ngộ nghĩnh này, mẹ đừng quên kèm theo cho bé một số phụ kiện phù hợp như mũ lưỡi trai cá tính, nón kết sành điệu, kính mát “cực ngầu” hay giày bata năng động nhé!            Chúc con yêu của bạn có thêm những bộ đồ thời trang cho bé trai theo phong cách đa màu sắc cực xinh xắn và đáng yêu!</p> 
						     	<h4 class="price">Giá bán: 200.000 đ</h4> 
						     	<p class="vote">
						     		<strong>91%</strong> of người mua hài lòng với sản phẩm này 
						     		<strong>(87 bình chọn)</strong>
						     	</p> 
						     	<h5 class="sizes">Kích cỡ: 
						     		<span class="size" data-toggle="tooltip" title="small">s</span> 
						     		<span class="size" data-toggle="tooltip" title="medium">m</span> 
						     		<span class="size" data-toggle="tooltip" title="large">l</span> 
						     		<span class="size" data-toggle="tooltip" title="xtra large">xl</span> 
						     	</h5> 
						     	<h5 class="colors">Màu: 
						     		<span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span> 
						     		<span class="color green"></span> 
						     		<span class="color blue"></span> 
						     	</h5> 
						     	<div class="action"> 
						     		<a href="http://hocwebgiare.com/" target="_blank"><button class="add-to-cart btn btn-default" type="button">MUA NGAY</button></a> 
						     		<a href="http://hocwebgiare.com/" target="_blank">
						     			<button class="like btn btn-default" type="button">
						     				<span class="fa fa-heart"></span>
						     			</button>
						     		</a> 
						     	</div> 
						    </div> 
				   		</div> 
				  	</div> 
				</div>
			</div> 
		</div>
	</div>
@endsection
@section('footer')
	<script type="text/javascript">
		$(document).ready(function() {
		    $('.tabs .tab-links a').on('click', function(e)  {
		        var currentAttrValue = $(this).attr('href');
		        // Show/Hide Tabs
		        $('.tabs ' + currentAttrValue).show().siblings().hide();
		        // Change/remove current tab to active
		        $(this).parent('li').addClass('active').siblings().removeClass('active');
		        e.preventDefault();
		    });
		});
	</script>
@endsection