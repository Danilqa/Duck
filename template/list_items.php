<div class="column column9">				
  <div class="catalog">					
    <div class="row clearfix">					
      <!-- элементы каталога -->					    
      <?php foreach ($products as $key=>$product): ?>	
        <div class="item-block column column4"> 
          <?php echo $product['name']; ?>
          <a href="single-item.html" class="item"> 
            <img src="http://images4.fanpop.com/image/photos/16000000/Cute-Kitten-kittens-16096566-1280-800.jpg" alt="уточка">
          </a>
          <p>
            Цена: <?php echo $product['price']; ?>
          </p>
          азаза
        </div>
      <?php endforeach; ?>			
    </div>				
  </div>			
</div> 

<!--

      <div class="item-block column column4">             
        <a href="single-item.html" class="item">                
          <img src="http://images4.fanpop.com/image/photos/16000000/Cute-Kitten-kittens-16096566-1280-800.jpg" alt="уточка">
          </a>              
        <p>                 Цена: 
500             
        </p>              
                          Не продаётся!               
                    
      </div>  


-->