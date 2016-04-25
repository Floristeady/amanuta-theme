$(document).ready(function($){
	$('#social-stream').dcSocialStream({
		feeds: {
			facebook: {
				id: '228474407163227',
				intro: "Publicado",
				feed: "posts",
				url: "/wp-content/themes/amanuta-theme-master/facebook.php"
			}
			,
			// instagram: {
			// 	id: '!1652168794',
			// 	intro: "Publicado ",
			// 	accessToken: "1652168794.4a4da2c.79a7d80aaed7425f9180b5207a22b59d",
			// 	redirectUrl: 'http://localhost',
			// 	clientId: "02b23939d63944208cb96620d78e3b8c"
			// }
			// instagram: {
			// 	id: '!2845657272',
			// 	intro: "Publicado ",
			// 	accessToken: "2845657272.4a4da2c.b329989c6f3849fdbf21786fe33012c9",
			// 	redirectUrl: 'http://localhost',
			// 	clientId: "4a4da2ce42e24b7cad471dc3d0c13245"
			// }
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
		iconPath: '/wp-content/themes/amanuta-theme-master/images/dcsns-dark/',
		imagePath: '/wp-content/themes/amanuta-theme-master/images/dcsns-dark/'
	});
});