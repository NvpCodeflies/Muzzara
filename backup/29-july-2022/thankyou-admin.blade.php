<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Muzzara | Welcome</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}" />

    <!-- Slick slider -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/slick.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/assets/css/slick-theme.min.css') }}" />

    <!-- Fontawesome 5 -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/all.min.css') }}" />

    <!-- Lightgallery  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.1.8/css/lightgallery.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.1.8/css/lg-zoom.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.1.8/css/lg-thumbnail.min.css"
    />

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/custom.css') }}" />
  </head>

  <body>
    <div class="admin_thankyou_section">
      <div class="container-fluid p-0 overflow-hidden">
        <div class="row">
          <div class="col-lg-3">
            <div class="area_selector">
              <ul class="area_selector-list">
               
              </ul>

              <div class="area_wrapper default_hide area_control" id="leftAreaControl">
                <div class="area_head exitAreaControl">
                  <span class="area_left-arrow"></span>
                  <span class="exit-area-name">Left Area</span>
                </div>
                <p class="area_name">Left Area</p>
               <div class="current_widget-list">
                  <div class="curent_widget current_widget-disabled">
                    <i class="fas fa-circle"></i> <div class="current_widget_name">Order Confirmed</div>
                  </div>
                  <div class="curent_widget current_widget-disabled">
                    <i class="fas fa-circle"></i> <div class="current_widget_name">Customer Info</div>
                  </div>
               </div>
                <div class="area_widgets">
                  <div class="area_add-widgets add_widget-btn addWidgetBtn">
                    <i class="far fa-plus-square"></i> Add Widgets
                  </div>
                </div>
              </div>

              <div class="area_wrapper default_hide area_control" id="rightAreaControl">
                <div class="area_head exitAreaControl">
                  <span class="area_left-arrow"></span>
                  <span class="exit-area-name">Right Area</span>
                </div>
                <p class="area_name">Right Area</p>
                <div class="curent_widget current_widget-disabled">
                  <i class="fas fa-circle"></i> <div class="current_widget_name">Order Confirmed</div>
                </div>
                <div class="area_widgets">
                  <div class="area_add-widgets add_widget-btn addWidgetBtn">
                    <i class="far fa-plus-square"></i> Add Widgets
                  </div>
                </div>
              </div>

      

              <div class="area_wrapper default_hide area_control" id="popupArea">
                <div class="area_head exitAreaControl">
                  <span class="area_left-arrow"></span>
                  Pop Ups
                </div>
                <p class="area_name">Pop Ups</p>
                <div class="area_widgets">
                  <div class="area_add-widgets">
                    <i class="far fa-plus-square"></i> Add Widgets
                  </div>
                </div>
              </div>

              <div class="area_wrapper default_hide widget_list-wrapper" id="widgetList">
                <div class="area_head" id="exitWidgetList">
                  <span class="area_left-arrow"></span>
                  Add Section
                </div>
                <p class="area_name">Available Widgets</p>
                <div class="area_widgets" id="availableWidgetsList">
                  <div class="area_add-widgets" data-target="#productsRecommendationWidgets">
                    <i class="fas fa-box"></i> Add Product Recommendation
                  </div>
                  <div class="area_add-widgets" data-target="#widgetText">
                    <i class="fas fa-align-justify"></i> Add Text
                  </div>

                  <div class="area_add-widgets" data-target="#widgetVideo">
                    <i class="fas fa-play-circle"></i> Add Video
                  </div>

                  <div class="area_add-widgets" data-target="#imageWidget">
                    <i class="fas fa-image"></i> Add Image
                  </div>

                  <div class="area_add-widgets" data-target="#faqWidget">
                    <i class="fas fa-list-alt"></i> FAQ
                  </div>

                  <div class="area_add-widgets" data-target="#reviewWidget">
                    <i class="fas fa-star"></i> Add Reviews
                  </div>
                </div>
              </div>

              <!-- Text Widget Start -->
              <div class="widget_item default_hide" id="widgetText">
                <span class="back_btn exitWidget">
                  <div class="area_left-arrow"></div>
                  Text
                </span>

                <div class="widget_box">
                  <p class="widget_box-name">Text</p>
                  <div class="widget_text">Text</div>
                  <div class="editor_wrapper">
                    <div class="editor_toolbar"></div>
                    <div class="editor_edit"></div>
                  </div>
                </div>

                <div class="widget_box">
                  <p class="widget_box-name">Display Setting</p>
                  <!-- <div class="widget_text">Display</div> -->
                  <div class="form-group p-3">
                    <div class="dropdown">
                      <button
                        class="btn dropdown-toggle form-control text-left border d-flex justify-content-between align-items-center"
                        type="button"
                        id="dropdownMenuButton"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        Display
                      </button>
                      <div
                        class="dropdown-menu"
                        aria-labelledby="dropdownMenuButton"
                      >
                        <a class="dropdown-item" href="#">On every impression</a>
                        <a class="dropdown-item" href="#">On every impression</a>
                        <a class="dropdown-item" href="#">Once per order</a>
                        <p
                          class="dropdown-item"
                          href="#"
                          type="button"
                          data-toggle="dropdown">Based on number of impressions > 
                          <div
                            class="dropdown-menu dropdown-bottom"
                            aria-labelledby="dropdownMenuButton"
                          >
                            <a href="#" class="dropdown-item">testing</a>
                          </div>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="widget_box">
                    <button class="btn btn-danger w-100"><i class="fas fa-trash-alt"></i> Delete Widget</button>
                </div>
              </div>
              <!-- Text Widget End -->

              <!-- Image Widget Start-->
              <div class="widget_item default_hide" id="imageWidget">
                  <span class="back_btn exitWidget">
                    <div class="area_left-arrow"></div>
                    Image 
                  </span>

                  <div class="widget_box">
                    <p class="widget_box-name">Image</p>
                  
                    <div class="uploadOuter">
                    
                    <span class="dragBox" >
                      Darg and Drop image here
                    <input type="file"  id="dragUploadFile"  />
                    </span>
                    </div>
                    <div id="preview" class="m-3"></div>
                    <p class="widget_box-name mb-2">Image</p>
                    <div class="alignement_btn d-flex align-items-center justify-content-between mx-3">
                      <input type="radio" class="d-none" name="imgAlignment" id="imgAlignmentLeft">
                        <label for="imgAlignmentLeft" class="theme_btn theme_btn-secondary">
                          <i class="fas fa-align-left"></i>
                        </label>

                        <input type="radio" class="d-none" name="imgAlignment" id="imgAlignmentCenter">
                        <label for="imgAlignmentCenter" class="theme_btn theme_btn-secondary">
                          <i class="fas fa-align-center"></i>
                        </label>
                        

                        <input type="radio" class="d-none" name="imgAlignment" id="imgAlignmentRight">
                        <label for="imgAlignmentRight" class="theme_btn theme_btn-secondary">
                          <i class="fas fa-align-right"></i>
                        </label>
                    </div>

                  </div>



                  <div class="widget_box">
                      <button class="btn btn-danger w-100"><i class="fas fa-trash-alt"></i> Delete Widget</button>
                  </div>
                </div>
                <!-- Image Widget Start-->

              <!-- Video Widget Start-->
              <div class="widget_item default_hide" id="widgetVideo">
                <span class="back_btn exitWidget">
                  <div class="area_left-arrow"></div>
                  Text
                </span>

                <div class="widget_box">
                  <p class="widget_box-name">Video</p>
                  <div class="widget_text">Youtube Video URL</div>
                  <div class="form-group mx-3">
                    <input type="text" placeholder="Paste the Youtube Video URL" class="form-control">
                  </div>
                </div>

                <div class="widget_box">
                  <p class="widget_box-name">Display Setting</p>
                  <!-- <div class="widget_text">Display</div> -->
                  <div class="form-group p-3">
                    <div class="dropdown">
                      <button
                        class="btn dropdown-toggle form-control text-left border d-flex justify-content-between align-items-center"
                        type="button"
                        id="dropdownMenuButton"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        Display
                      </button>
                      <div
                        class="dropdown-menu"
                        aria-labelledby="dropdownMenuButton"
                      >
                        <a class="dropdown-item" href="#">On every impression</a>
                        <a class="dropdown-item" href="#">On every impression</a>
                        <a class="dropdown-item" href="#">Once per order</a>
                        <p
                          class="dropdown-item"
                          href="#"
                          type="button"
                          data-toggle="dropdown">Based on number of impressions > 
                          <div
                            class="dropdown-menu dropdown-bottom"
                            aria-labelledby="dropdownMenuButton"
                          >
                            <a href="#" class="dropdown-item">testing</a>
                          </div>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="widget_box">
                    <button class="btn btn-danger w-100"><i class="fas fa-trash-alt"></i> Delete Widget</button>
                </div>
              </div>
              <!-- Video Widget End-->

              <!-- Faq Widget Start-->
              <div class="widget_item default_hide" id="faqWidget">
                <span class="back_btn exitWidget">
                  <div class="area_left-arrow"></div>
                  FAQs 
                </span>

                <div class="widget_box">
                  <p class="widget_box-name">Edit FAQs</p>
                
                </div>

                <div class="faq_done-list mt-3">
                  <ul>

                  </ul>
                </div>

                <div class="faq_manage-wrapper">
                  <div class="faq_manage-lists">
                    <div class="faq_manage-lists-items">
                      <form action="#">
                        <h5 class="mb-3 mt-3">Add FAQ</h5>
                        <div class="row">
                          <div class="col-12">
                            <div class="form-group">
                              <label for="faqName">FAQ Title</label>
                              <input id="faqName" type="text" placeholder="FAQ Title" class="form-control">
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="form-group">
                              <label for="faqItem1">FAQ Decription</label>
                              <input id="faqDescription" type="text" placeholder="FAQ Title" class="form-control">
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="text-right">
                              <button class="theme_btn theme_btn-primary">Add</button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

                <div class="widget_box">
                    <button class="btn btn-danger w-100"><i class="fas fa-trash-alt"></i> Delete Widget</button>
                </div>
              </div>
              <!-- Faq Widget Start-->

              <!-- review Widget Start-->
              <div class="widget_item default_hide" id="reviewWidget">
                <span class="back_btn exitWidget">
                  <div class="area_left-arrow"></div>
                  Reviews 
                </span>

                <div class="widget_box">
                  <p class="widget_box-name">Edit Reviews</p>
                </div>

                <div class="testimonial_edit-list">
                  <div class="testimonial_edit-item">
                    <div class="testimonial_edit-img">
                      <img src="public/assets/icons/client.png" alt="">
                    </div>
                    <div class="testimonial_edit-content">
                      <h6>Client name</h6>
                      <ul class="testimonial_rating">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                      </ul>
                      <p>

                        While most brands and websites offer a ‘customer
                        testimonials’ page (perhaps with some variation on the
                        title), this definitely should not be the only place you
                        quote testimonials! The problem with testimonial pages is
                        that they (quite understandably) stink of marketing.

                      </p>

                      <button class="theme_btn theme_btn-primary float-right"><i class="fas fa-trash"></i></button>
                    </div>
                  </div>
                </div>

                <div class="testimonial_add-form">
                  <form id="addTestimonialForm">
                    <h5 class="mb-3">Add Testimonial</h5>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="">Client image</label>
                          <input type="file" class="form-control" id="clientImg">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="">Client Name</label>
                          <input type="text" class="form-control" id="clientName">
                        </div>
                      </div>

                      <div class="col-12">
                        <div class="form-group">
                          <label for="">Client Star Rating</label>
                          <input type="number" class="form-control" min="1" max="5" id="clientRating">
                        </div>
                      </div>

                      <div class="col-lg-12">
                        <div class="form-group">
                          <label for="">Client's Comment</label>
                          <textarea name="" class="form-control"  cols="30" rows="5" id="clientComment"></textarea>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="text-right">
                          <button class="theme_btn theme_btn-primary">Add</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>



                <div class="widget_box">
                    <button class="btn btn-danger w-100"><i class="fas fa-trash-alt"></i> Delete Widget</button>
                </div>
              </div>
              <!-- review Widget Start-->

              <!-- Products Widget Start-->
              <div class="widget_item default_hide" id="productsRecommendationWidgets">
                <span class="back_btn exitWidget">
                  <div class="area_left-arrow"></div>
                  Product Recommendation
                </span>

                <div class="widget_box ">
                  <p class="widget_box-name">Product Selection</p>
                  <p class="widget_text">Products/collection</p>
                  <div class="form-group mx-3">
                    <select name="" id="" class="form-control">
                      <option value="Select" disabled>Select</option>
                      <option value="">Specific Collection</option>
                      <option value="">Specific Product</option>
                      
                    </select>
                  </div>

                    <div class="text-center mb-3">
                        <button class="theme_btn theme_btn-primary" data-toggle="modal" data-target="#selectProductModal">Select Product</button>
                    </div>
                </div>

                <div class="widget_box">
                  <p class="widget_box-name">Discount Setting</p>
                  <p class="widget_text mb-1">Automatic Discount</p>

                  <div class="form-group mx-3">
                    <input type="number" placeholder="Discount" class="form-control">
                    <select name="" id="" class="form-control">
                      <option value="Select" disabled>Select</option>
                      <option value="">% Off</option>
                      <option value="">USD Off</option>
                      
                    </select>
                  </div>
                  <hr>
                  <div class="form-check mx-3 mb-3">
                    <input class="form-check-input mt-0" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                      Free Shipping
                    </label>
                  </div>
                </div>
                <div class="widget_box">
                  <p class="widget_box-name">General Settings</p>
                  <p class="widget_text mb-1">Offer Description</p>

                  <div class="editor_wrapper mx-3 border mb-3">
                    <div class="editor_toolbar"></div>
                    <div class="editor_edit"></div>
                  </div>

                  <div class="form-group mx-3">
                    <label for="">Offer Ends Timer (in minutes)</label>
                    <input type="number" name="" id="" class="form-control">
                  </div>

                  <hr>
                  <div class="form-check mx-3 mb-3">
                    <input class="form-check-input mt-0" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                      Quantity Selector
                    </label>
                  </div>
                </div>

                <div class="widget_box">
                  <p class="widget_box-name">Price Settings</p>
                  <p class="widget_text mb-1">Display Price(customization)</p>

                  <div class="form-group mx-3 mb-4">
                    <label for="">Compare Price Color</label>
                    <input type="color" name="" id="" class="form-control p-0">
                  </div>

                  <div class="form-group mx-3">
                    <label for="">Sale Price Color</label>
                    <input type="color" name="" id="" class="form-control p-0">
                  </div>
                </div>

                <div class="widget_box">
                  <p class="widget_box-name">Shop Button Settings</p>
                  <p class="widget_text mb-1">Shop CTA button(customization)</p>

                  <div class="form-group mx-3 mb-4">
                    <label for="">Button Text</label>
                    <input type="text" placeholder="Accept" name="" id="" class="form-control">
                  </div>

                  <div class="form-group mx-3">
                    <label for="">Background color</label>
                    <input type="color" name="" id="" class="form-control p-0">
                  </div>

                  <div class="form-group mx-3">
                    <label for="">Text color</label>
                    <input type="color" name="" id="" class="form-control p-0">
                  </div>
                </div>

                <div class="widget_box">
                  <p class="widget_box-name mb-3">Others</p>

                  <div class="form-check mx-3 mb-3 d-flex align-items-center ">
                    <input class="form-check-input mt-0" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                      Hide products that are in the original order
                    </label>
                  </div>
                </div>

                <div class="widget_box">
                  <p class="widget_box-name">Display Setting</p>
                  <!-- <div class="widget_text">Display</div> -->
                  <div class="form-group p-3">
                    <div class="dropdown">
                      <button
                        class="btn dropdown-toggle form-control text-left border d-flex justify-content-between align-items-center"
                        type="button"
                        id="dropdownMenuButton"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        Display
                      </button>
                      <div
                        class="dropdown-menu"
                        aria-labelledby="dropdownMenuButton"
                      >
                        <a class="dropdown-item" href="#">On every impression</a>
                        <a class="dropdown-item" href="#">On every impression</a>
                        <a class="dropdown-item" href="#">Once per order</a>
                        <p
                          class="dropdown-item"
                          href="#"
                          type="button"
                          data-toggle="dropdown">Based on number of impressions > 
                          <div
                            class="dropdown-menu dropdown-bottom"
                            aria-labelledby="dropdownMenuButton"
                          >
                            <a href="#" class="dropdown-item">testing</a>
                          </div>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="widget_box">
                    <button class="btn btn-danger w-100"><i class="fas fa-trash-alt"></i> Delete Widget</button>
                </div>
              </div>
              <!-- Products Widget End-->







            </div>
          </div>
          <div class="col-lg-9">
            <section class="thankyou__section">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-7">
                    <div class="thankyou__left">
                      <a href="#" class="thankyou__logo">Testmyserver</a>
                      <div class="thankyou__order-notification">
                        <div class="thankyou__order-icon">
                          <img src="public/assets/img/check.png" alt="" />
                        </div>
                        <div class="thankyou__order-content">
                          <span> Order #1038 </span>
                          <p>Thank you DG!</p>
                        </div>
                      </div>
                      <div class="thankyou__map theme_box ">
                        <img src="public/assets/img/map.png" alt="" />
                        <div class="theme_box-content">
                          <p class="theme_box-title">Your order is confirmed</p>
                          <span
                            >You’ll receive an email when your order is
                            ready.</span
                          >
                          <a href="#" class="theme_btn theme_btn-primary"
                            >Download Shop to track package</a
                          >
                        </div>
                      </div>
                      <div class="leftarea_widgets-list">

                      
                      <div class="widget_render widget_order-confirmed">
                        <div class="theme_box">
                          <div class="theme_box-content">
                            <p class="theme_box-title">Order updates</p>
                            <span class="theme_box-subtitle"
                              >You’ll get shipping and delivery updates by
                              email.</span
                            >
                          </div>
                        </div>
                      </div>

                      <div class="widget_render widget_order-confirmed">
                        <div class="theme_box">
                          <div class="theme_box-content">
                            <p class="theme_box-title">Customer information</p>
                            <div class="row">
                              <div class="col-lg-6">
                                <p class="title_3">Contact information</p>
                                <p class="title_3-subtitle">2@GMAIL.COM</p>
  
                                <p class="title_3">Shipping address</p>
                                <address class="address">
                                  DG FH<br />E<br />TREWS FL 33125<br />United
                                  States
                                </address>
  
                                <p class="title_3">Shipping method</p>
                                <p class="title_3-subheading">Economy</p>
  
                                <p class="thankyou_help">
                                  Need help?
                                  <a href="mailto:dev.team2080@gmail.com"
                                    >Contact us</a
                                  >
                                </p>
  
                                <a
                                  href="javascript:void(0)"
                                  class="theme_btn theme_btn-primary"
                                  >Continue Shopping</a
                                >
                              </div>
  
                              <div class="col-lg-6">
                                <p class="title_3">Payment method</p>
                                <p class="title_3-subheading">
                                  Bogus ending with 1 - $4.90
                                </p>
  
                                <p class="title_3">Billing address</p>
                                <address class="address">
                                  DG FH<br />E<br />TREWS FL 33125<br />United
                                  States
                                </address>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                    </div>

                      <p class="thankyou__copyright">
                        All rights reserved testmyserver
                      </p>
                    </div>
                  </div>
                  <div class="col-lg-5">
                    <div class="thankyou__right">
                      <div class="reciept__wrapper">
                        <div class="reciept__head reciept__row">
                          <div class="reciept__left">
                            <div class="reciept_product_thumb" data-product="1">
                              <img src="public/assets/img/camera.jpg" alt="" />
                            </div>

                            <p class="reciept__product-name">Product Name</p>
                          </div>
                          <div class="reciept__right">
                            <p>free</p>
                          </div>
                        </div>
                        <div class="reciept__body reciept__row">
                          <div class="reciept__left">
                            <p>Subtotal</p>
                          </div>

                          <div class="reciept__right">
                            <p>$0.00</p>
                          </div>
                        </div>

                        <div class="reciept__body reciept__row">
                          <div class="reciept__left">
                            <p>Shipping</p>
                          </div>

                          <div class="reciept__right">
                            <p>$4.90</p>
                          </div>
                        </div>

                        <div class="reciept__footer reciept__row">
                          <div class="reciept__left">
                            <h6>Total</h6>
                          </div>

                          <div class="reciept__right">
                            <h6>USD $4.90</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>

     <!-- Select Products/Collections Start -->

     <div
     class="modal fade funnel-arrange-model"
     id="selectProductModal"
     tabindex="-1"
     role="dialog"
     aria-labelledby="selectProductModal"
     aria-hidden="true"
   >
     <div class="modal-dialog modal-dialog-centered" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title">Select Products/Collections</h5>
           <button
             type="button"
             class="close"
             data-dismiss="modal"
             aria-label="Close"
           >
             <span aria-hidden="true"
               ><svg
                 width="14"
                 height="14"
                 viewBox="0 0 14 14"
                 fill="none"
                 xmlns="http://www.w3.org/2000/svg"
               >
                 <path
                   d="M12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41L12.59 0Z"
                   fill="black"
                 />
               </svg>
             </span>
           </button>
         </div>
         <div class="modal-body">
             <div class="theme_tabs-wrapper">
               <ul>
                 <li class="theme_tab-btn active" data-target="#tabProducts">Products</li>
                 <li class="theme_tab-btn" data-target="#tabCollections">Collections</li>
               </ul>
               <div class="form_search">
                 <input type="text" placeholder="Search Items">
               </div>
               <div class="theme_tab-content active" id="tabProducts">
                   <div class="theme_table-wrap">
                     <table class="theme_table theme_table-simple">
                       <thead>
                         <tr>
                           <th><input type="checkbox" class="d-none" id="edit_product-selectall"> <label class="checkbox_placeholder" for="edit_product-selectall"></label></th>
                           <th>Product Name</th>
                           
                         </tr>
                       </thead>
                       <tbody>
                         <tr>
                           <td>
                             <input type="checkbox" class="d-none" id="edit_product-funnel-one"><label class="checkbox_placeholder" for="edit_product-funnel-one"></label>
                           </td>
                           <td>
                             <label for="edit_product-funnel-one">Funnel name one</label>
                           </td>
                          
                         </tr>

                         <tr>
                          <td>
                            <input type="checkbox" class="d-none" id="edit_product-funnel-one"><label class="checkbox_placeholder" for="edit_product-funnel-one"></label>
                          </td>
                          <td>
                            <label for="edit_product-funnel-one">Funnel name one</label>
                          </td>
                         
                        </tr>

                        <tr>
                          <td>
                            <input type="checkbox" class="d-none" id="edit_product-funnel-one"><label class="checkbox_placeholder" for="edit_product-funnel-one"></label>
                          </td>
                          <td>
                            <label for="edit_product-funnel-one">Funnel name one</label>
                          </td>
                         
                        </tr>

                        <tr>
                          <td>
                            <input type="checkbox" class="d-none" id="edit_product-funnel-one"><label class="checkbox_placeholder" for="edit_product-funnel-one"></label>
                          </td>
                          <td>
                            <label for="edit_product-funnel-one">Funnel name one</label>
                          </td>
                         
                        </tr>

                         
                         <tfoot>

                             <td>
                               <p class="pagination_count">Showing 5 of 5 results</p>
                             </td>
                             <td>
                              
                             
                               <button class="theme_btn theme_btn-primary">Save</button>
                               <button class="theme_btn theme_btn-secondary" data-dismiss="modal">Close</button>
                             </td>
                 
                         </tfoot>
                         
                       </tbody>
                     </table>
                   </div>
               </div>

               <div class="theme_tab-content" id="tabCollections">
                 <div class="theme_table-wrap">
                   <table class="theme_table theme_table-simple">
                     <thead>
                       <tr>
                         <th><input type="checkbox" class="d-none" id="edit_product-selectall"> <label class="checkbox_placeholder" for="edit_product-selectall"></label></th>
                         <th colspan="2">Collection</th>
                        
                       </tr>
                     </thead>
                     <tbody>
                       <tr>
                         <td>
                           <input type="checkbox" class="d-none" id="edit_collection-funnel-one"><label class="checkbox_placeholder" for="edit_collection-funnel-one"></label>
                         </td>
                         <td colspan="2">
                           <label for="edit_collection-funnel-one">Funnel Collection one</label>
                         </td>
                       </tr>

                       <tr>
                         <td>
                           <input type="checkbox" class="d-none" id="edit_collection-funnel-two"><label class="checkbox_placeholder" for="edit_collection-funnel-two"></label>
                         </td>
                         <td colspan="2">
                           <label for="edit_collection-funnel-two">Funnel Collection Two</label>
                         </td>
                       </tr>


                       <tr>
                         <td>
                           <input type="checkbox" class="d-none" id="edit_collection-funnel-three"><label class="checkbox_placeholder" for="edit_collection-funnel-three"></label>
                         </td>
                         <td colspan="2">
                           <label for="edit_collection-funnel-three">Funnel Collection three</label>
                         </td>
                       </tr>

                       
                       <tfoot>

                           <td>
                             <p class="pagination_count">Showing 5 of 5 results</p>
                           </td>
                           <td>
                            
                            
                             <button class="theme_btn theme_btn-primary">Save</button>
                             <button class="theme_btn theme_btn-secondary" data-dismiss="modal">Close</button>
                           </td>
               
                       </tfoot>
                       
                     </tbody>
                   </table>
                 </div>
             </div>

              

             </div>
         </div>
         
       </div>
     </div>
   </div>

   <!-- Select Products/Collections End-->

    <!-- jQuery -->
    <script src="{{ asset('public/assets/js/jquery.min.js') }}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

    <!-- Popper js  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>

    <!-- Bootstrap js -->
    <script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>

    <!-- Slick js -->
    <script src="{{ asset('public/assets/js/slick.min.js') }}"></script>

    <!-- Lightgallery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.1.8/lightgallery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.1.8/plugins/thumbnail/lg-thumbnail.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.1.8/plugins/zoom/lg-zoom.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/decoupled-document/ckeditor.js"></script>

    <!-- Custom js -->
    <script src="{{ asset('public/assets/js/custom.js') }}"></script>
  </body>
</html>
