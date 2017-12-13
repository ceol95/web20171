
<?php 
    $data = DB::table('news')
    ->limit(3)
    ->orderBy('created_at', 'desc')
    ->get(); 
  ?>
<?php foreach($data as $row): ?>
<div class="col-lg-12 no-padding">
  <div class="col-lg-4">
    <a href="#" title=""><img src="<?php echo url('public/uploads/news/'.$row->images); ?>" alt="" width="95%" height="99%"> </a>
  </div>
  <div class="col-lg-8">
    <h4><a href="<?php echo url('/tin-tuc/'.$row->id.'-'.$row->slug); ?>" title="<?php echo $row->title; ?>"><?php echo $row->title; ?></a></h4>
    <p> 
      <?php echo $row->intro; ?>

    </p>
    <p><strong>Lúc :</strong><?php echo $row->created_at; ?> Bởi : <strong> <?php echo $row->author; ?></strong></p>
  </div>
</div>
<?php endforeach; ?>