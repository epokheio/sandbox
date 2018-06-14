from instapy import InstaPy

session = InstaPy(username='__m_i_r_a___', password='ilovemira314')

session.login()

session.set_do_follow(enabled=True, percentage=, times=)
session.like_by_tags(['experimentalmusic', 'contemporaryart', 'performance', 'electronica', 'avantguarde', 'tokyoavanguarde', 'orangemilk', 'foodman', 'modular', 'contemporarydance', 'artmagazine', 'artpress', 'frieze', 'butoh', 'experimentalart', 'droneart', 'ambientexperimental', 'maxmsp', 'markuspopp', 'glitchart', 'vaporwave', 'nylonmagazine'], amount=50, media=None)
session.unfollow_users(amount=30, sleep_delay=)

session.end()