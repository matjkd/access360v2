
    		<ul>
    		<li><?=anchor('/', 'home')?></li>
               
                  
           
                  <?php $is_logged_in = $this->session->userdata('is_logged_in');
		$role = $this->session->userdata('role');
		if($is_logged_in != 0 || $role == 1)
		{
		
                    echo anchor('admin', 'Admin');
                       
		}
                
                ?>
                   
    		</ul>

