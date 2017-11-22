<aside id="sidebar" class="sidebar">
    <div id="leftside-navigation" class="nano">
        <ul class="nano-content">
            <li class="active">
                <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-user-o')).'Usuarios', array('controller' => 'users', 'action' => 'index'), array('escape' => false)) ?>
            </li>
            <li class="sub-menu">
                <a href=""><i class="fa fa-table"></i><span>Tables</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                <ul>
                    <li><a href="tables-basic.html">Basic Tables</a>
                    </li>
                    <li><a href="tables-data.html">Data Tables</a>
                    </li>
                </ul>
            </li>
            <li>
              <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-sign-out')).'Cerrar sesion', array('controller' => 'users', 'action' => 'logout'), array('escape' => false)) ?>
            </li>
            
            <!-- <li class="sub-menu">
                <?php //$this->Html->link(__('Cuotas'), ['controller'=>'Cuotas','action' => 'index']) ?>
                <a href=""><i class="fa fa-cogs"></i><span>UI Elements</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                <ul>
                    <li><a href="ui-alerts-notifications.html">Alerts &amp; Notifications</a>
                    </li>
                    <li><a href="ui-panels.html">Panels</a>
                    </li>
                    <li><a href="ui-buttons.html">Buttons</a>
                    </li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href=""><i class="fa fa-table"></i><span>Tables</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                <ul>
                    <li><a href="tables-basic.html">Basic Tables</a>
                    </li>
                    <li><a href="tables-data.html">Data Tables</a>
                    </li>
                </ul>
            </li> -->
        </ul>
    </div>
</aside>
<script type="text/javascript">
$(document).ready(function() {
  $( "#leftside-navigation" ).click(function() {
    $( this ).toggleClass( "show" );
  });
});
</script>
