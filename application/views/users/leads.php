<div class="gtco-container">
<div class="row" style="margin-top: 10%">
  <h3 style="text-align: center;">Leads</h3>
        <div class="col-md-7">
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <div class="icon-addon addon-lg">
                <form method="post"  action="<?php echo base_url(); ?>users/leads" >
                    <div class="row">
                    <div class="col-md-12">
                    <input type="text" placeholder="Search" class="form-control" id="title" name="title" value="<?php if(!empty($search_title)){ echo $search_title; } ?>" > 
                    <!-- <input type="submit" class="btn btn-primary" value="Search" > -->
                    </div>
                  </div>
                </form>
                </div>
            </div>
        </div>    
  </div>
  <div class="row">
        <div class="col-md-3">
          
        </div>
        <div class="col-md-9">
          <?php 
         foreach($datas as $data)
         {
            ?>
            <div class="panel panel-default bordercolor-panel">
             <div class="panel-body bgcolor-panel-body">
             <div class="row">

             <div class="col-md-12">
                 <div class="col-md-8 col-sm-5 col-xs-8">
                 <h2 class="font-size-20 bold advisor-name" itemprop="name"><?php echo $data['nama']; ?></h2>
                 <meta itemprop="birthDate" content="">
                 <div class="advresultshr"></div>
                 <!-- <div class="marginBottom10" style="overflow-y:hidden"><a href="mailto:Anup_rus@yahoo.co.in" class="brand-links bold"><i class="fa fa-envelope"></i>  Chiranjeeviandco@gmail.com</a></div>  -->    
                 <div class=""><a href="javascript:void(0)" class="brand-links bold advisor-mobile" title="9916480706"><i class="fa fa-lg fa-mobile"> </i> <?php echo $data['telp']; ?></a></div> 
                  
                 </div>
                 <div class="col-md-4 col-sm-4 hidden-xs">
                 <meta itemprop="jobTitle" content="Life Insurance Advisor">
                   <ul>
                      <li><i class="fa fa-map-marker" aria-hidden="true"></i> No. 19</li>              
                    </ul>
                 </div>
                <div class="panel-footer bgcolor-panel-heading">
                   <div class="row">
                   <div class="col-md-3 col-sm-3 col-xs-6">
                         </div>
                   <div class="col-md-3 col-sm-3 hidden-xs">
                   </div>
                   <div class="col-md-3 col-sm-3 hidden-xs">
                   </div>
                   <div class="col-md-3 col-sm-3 col-xs-6"><a href="#" class="btn btn-warning bold">View More</a></div>
                   </div>
                   </div>
              </div>
             </div>
           </div>
         </div>
          <?php
         }
         ?>
      </div>    
  </div>
  <style>
.pagination-dive li {
    list-style: none;
    display: inline-block;
}
.pagination-dive a:hover, .pagination-dive .active a {
    background: #040404;
}

.pagination-dive a {
    display: inline-block;
    height: initial;
    background: #939890;
    padding: 10px 15px;
    border: 1px solid #fff;
    color: #fff;
}
</style>
  
<div class="pagination-dive">
<?php echo $nav; ?>
</div> 
</div>
