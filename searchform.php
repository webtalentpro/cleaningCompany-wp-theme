<form action="<?php echo esc_url(home_url( ))?>" class="search-form" method="get">
     <div class="form-group">

         <input
              name= "s"
              id="s"
              onfocus="if(this.value=='Search'){this.value==' ' }"
              onblur="if(this.value= ' '){this.value=='Search'}"
             type="text"
             class="form-control"
             placeholder="Type a keyword and hit enter">
             <button type="submit"><i class="fa fa-search"></i></button>
     </div>
 </form>