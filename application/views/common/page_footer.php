
		<script type="text/javascript">
			$(document).ready(function() {
				if($.cookie('quiz_cookie'))
				{
					var quiz_cookie_obj = jQuery.parseJSON($.cookie('quiz_cookie'));
					var username = quiz_cookie_obj.username;

					if (quiz_cookie_obj.userid=='1')
						var user_avatar = $('<a class="dropdown-toggle" href="<?php echo $this->config->base_url();?>admin/admin_main" ></a>');
					else
						var user_avatar = $('<a class="dropdown-toggle" href="<?php echo $this->config->base_url();?>user/info" ></a>');
					var user_info = $('<i class="fa fa-user"></i>');
					var user_detail = $('<ul class="dropdown-menu"></ul>');
					var user_logout = $('<li><a href="<?php echo $this->config->base_url();?>auth/logout"><i class="fa fa-power-off"></i>退出</a></li>');
					
					user_avatar.append(user_info);
          			user_avatar.append('&nbsp;&nbsp;'+ username);
          			user_detail.append(user_logout);
          			$('li#user_btn').html(user_avatar);
					$('li#user_btn').append(user_detail);
					if (quiz_cookie_obj.userid=='1')
					{
						$('li').removeClass('hidden');
						$('li#score').addClass('hidden');
					}
					else
					{
						$('li#logout').removeClass('hidden');
						$('li#score').removeClass('hidden');
					}
					$('li#register_li').addClass('hidden');

					$('#welcomepage').addClass('hidden');
				}
			});

			function findBootstrapEnvironment() {
				var envs = ['xs', 'sm', 'md', 'lg'];

				$el = $('<div>');
				$el.appendTo($('body'));

				for (var i = envs.length - 1; i >= 0; i--) {
					var env = envs[i];

					$el.addClass('hidden-'+env);
					if ($el.is(':hidden')) {
						$el.remove();
						return env;
					}
				}
			}

			
		</script>
	</body>
</html>