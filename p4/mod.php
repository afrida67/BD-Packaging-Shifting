<!-- Modal -->
<div class="modal fade" id="checkout_modal" role="dialog">
    <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-shopping-cart text-success fa-lg"></i> Check Out<small class='text-primary'> Billing Information</small></h4>
      </div>
      <div class="modal-body">
        <form action="cart/data.php?q=checkout" method="POST">
            <div class="form-group">
            
            </div>
            <div class="form-group">
               
            </div>
            <div class="form-group">
               
            </div>
            <div class="form-group">
              
            </div>
            <div class="form-group">
        
            </div>
            <div class="alert alert-info">
                Payment Type: <strong>Pay on Delivery</strong>
            </div>
            <div class="alert alert-warning">
                 Please wait for our call/text or email for confirmation. Thank You!
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Submit</button>
          </form>
      </div>
    </div>
  </div>
</div>