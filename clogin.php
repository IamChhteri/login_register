<li>
                  <?php
                
               if ($_SESSION["userName"] != ""){
               ?>
                <a href="logout.php" class=" px-2 lg:px-6 py-6 text-sm border-b-2 border-transparent hover:border-blue-600 leading-[22px] md:px-3 text-gray-500 hover:text-blue-500
              " title="Logut"> 
          
              <?php 
          
              echo 'Hello! '.$_SESSION["userName"]; ?> <span class="hidden lg:inline"> </span>
  
              </a>
            
           <?php } else {
               ?>
               <a href="login.php" class=" px-2 lg:px-6 py-6 text-sm border-b-2 border-transparent hover:border-blue-600 leading-[22px] md:px-3 text-gray-500 hover:text-blue-500
             " title="Logut"> 
         
         
            Login <span class="hidden lg:inline"> </span>
 
             </a>
              <?php }?>
                
</li>