window.onload = showlivetime();
					function showlivetime(){
						let dateobject = new Date();
						let livetime = dateobject.toLocaleTimeString();
						let gettimebox = document.getElementsByClassName('timebox')[0];
						gettimebox.innerHTML = livetime;
						setInterval(showlivetime,1000);
					}
					let dateobject2 = new Date();
					let getcopyrightyear = document.getElementById('year');
					getcopyrightyear.innerHTML = dateobject2.getFullYear();
					$(document).ready(function(){
						$('a.close_lrpopup').click(function(){
							$('.lrpopup').fadeOut();
							$('.loginblock').fadeOut();
							$('.registerblock').fadeOut();
						});
						$('a.login_btn').click(function(){
							$('.lrpopup').fadeIn();
							$('.loginblock').fadeIn();
							$('.registerblock').hide();
							$(this).addClass('active');
							$('a.register_btn').removeClass('active');
						});
						$('a.register_btn').click(function(){
							$('.lrpopup').fadeIn();
							$('.loginblock').hide();
							$('.registerblock').fadeIn();
							$(this).addClass('active');
							$('a.login_btn').removeClass('active');
						});
					});