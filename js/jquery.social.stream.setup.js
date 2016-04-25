$(document).ready(function($){
	$('#social-stream').dcSocialStream({
		feeds: {
			facebook: {
				id: '228474407163227',
				intro: "Publicado",
				feed: "posts",
				url: "/wp-content/themes/amanuta-theme/facebook.php"
			},
			instagram: {
				id: '!1652168794',
				intro: "Publicado ",
				accessToken: "1652168794.056e00b.682d0610f9c54b29abb5928ddbc91d97", //"1652168794.02b2393.ed099b452b2c413e86a171f1ce26c880",
				redirectUrl: 'http://localhost',
				clientId: "056e00b7353b42ae9e436060bc770529",
				comments: 0,
				likes: 0
			}
			
		},
		rotate: {
			delay: 0
		},
		twitterId: 'EdAmanuta',
		controls: true,
		center: true,
		filter: true,
		wall: true,
		cache: false,
		max: 'limit',
		limit: 10,	
		iconPath: '/wp-content/themes/amanuta-theme/images/dcsns-dark/',
		imagePath: '/wp-content/themes/amanuta-theme/images/dcsns-dark/'
	});
});