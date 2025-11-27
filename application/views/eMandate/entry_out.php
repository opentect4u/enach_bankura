<!DOCTYPE html>

<html lang="en-US">
	<head>
		<meta charset="UTF-8" />

		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link
			rel="stylesheet"
			href="https://www.wbscardb.com/wp-content/themes/WBSCARDB-child/assets_menu/css/style.css"
		/>

		<title><?= $data['header'] ?> &#8211; WBSCARDB</title>
		<meta name="robots" content="max-image-preview:large" />
		<link
			rel="alternate"
			type="application/rss+xml"
			title="WBSCARDB &raquo; Feed"
			href="https://www.wbscardb.com/feed/"
		/>
		<link
			rel="alternate"
			type="application/rss+xml"
			title="WBSCARDB &raquo; Comments Feed"
			href="https://www.wbscardb.com/comments/feed/"
		/>
		<script>
			window._wpemojiSettings = {
				baseUrl: "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
				ext: ".png",
				svgUrl: "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
				svgExt: ".svg",
				source: {
					concatemoji:
						"https:\/\/www.wbscardb.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.5.4",
				},
			};
			/*! This file is auto-generated */
			!(function (i, n) {
				var o, s, e;
				function c(e) {
					try {
						var t = { supportTests: e, timestamp: new Date().valueOf() };
						sessionStorage.setItem(o, JSON.stringify(t));
					} catch (e) {}
				}
				function p(e, t, n) {
					e.clearRect(0, 0, e.canvas.width, e.canvas.height),
						e.fillText(t, 0, 0);
					var t = new Uint32Array(
							e.getImageData(0, 0, e.canvas.width, e.canvas.height).data
						),
						r =
							(e.clearRect(0, 0, e.canvas.width, e.canvas.height),
							e.fillText(n, 0, 0),
							new Uint32Array(
								e.getImageData(0, 0, e.canvas.width, e.canvas.height).data
							));
					return t.every(function (e, t) {
						return e === r[t];
					});
				}
				function u(e, t, n) {
					switch (t) {
						case "flag":
							return n(
								e,
								"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f",
								"\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f"
							)
								? !1
								: !n(
										e,
										"\ud83c\uddfa\ud83c\uddf3",
										"\ud83c\uddfa\u200b\ud83c\uddf3"
								  ) &&
										!n(
											e,
											"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
											"\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
										);
						case "emoji":
							return !n(
								e,
								"\ud83d\udc26\u200d\u2b1b",
								"\ud83d\udc26\u200b\u2b1b"
							);
					}
					return !1;
				}
				function f(e, t, n) {
					var r =
							"undefined" != typeof WorkerGlobalScope &&
							self instanceof WorkerGlobalScope
								? new OffscreenCanvas(300, 150)
								: i.createElement("canvas"),
						a = r.getContext("2d", { willReadFrequently: !0 }),
						o = ((a.textBaseline = "top"), (a.font = "600 32px Arial"), {});
					return (
						e.forEach(function (e) {
							o[e] = t(a, e, n);
						}),
						o
					);
				}
				function t(e) {
					var t = i.createElement("script");
					(t.src = e), (t.defer = !0), i.head.appendChild(t);
				}
				"undefined" != typeof Promise &&
					((o = "wpEmojiSettingsSupports"),
					(s = ["flag", "emoji"]),
					(n.supports = { everything: !0, everythingExceptFlag: !0 }),
					(e = new Promise(function (e) {
						i.addEventListener("DOMContentLoaded", e, { once: !0 });
					})),
					new Promise(function (t) {
						var n = (function () {
							try {
								var e = JSON.parse(sessionStorage.getItem(o));
								if (
									"object" == typeof e &&
									"number" == typeof e.timestamp &&
									new Date().valueOf() < e.timestamp + 604800 &&
									"object" == typeof e.supportTests
								)
									return e.supportTests;
							} catch (e) {}
							return null;
						})();
						if (!n) {
							if (
								"undefined" != typeof Worker &&
								"undefined" != typeof OffscreenCanvas &&
								"undefined" != typeof URL &&
								URL.createObjectURL &&
								"undefined" != typeof Blob
							)
								try {
									var e =
											"postMessage(" +
											f.toString() +
											"(" +
											[JSON.stringify(s), u.toString(), p.toString()].join(
												","
											) +
											"));",
										r = new Blob([e], { type: "text/javascript" }),
										a = new Worker(URL.createObjectURL(r), {
											name: "wpTestEmojiSupports",
										});
									return void (a.onmessage = function (e) {
										c((n = e.data)), a.terminate(), t(n);
									});
								} catch (e) {}
							c((n = f(s, u, p)));
						}
						t(n);
					})
						.then(function (e) {
							for (var t in e)
								(n.supports[t] = e[t]),
									(n.supports.everything =
										n.supports.everything && n.supports[t]),
									"flag" !== t &&
										(n.supports.everythingExceptFlag =
											n.supports.everythingExceptFlag && n.supports[t]);
							(n.supports.everythingExceptFlag =
								n.supports.everythingExceptFlag && !n.supports.flag),
								(n.DOMReady = !1),
								(n.readyCallback = function () {
									n.DOMReady = !0;
								});
						})
						.then(function () {
							return e;
						})
						.then(function () {
							var e;
							n.supports.everything ||
								(n.readyCallback(),
								(e = n.source || {}).concatemoji
									? t(e.concatemoji)
									: e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)));
						}));
			})((window, document), window._wpemojiSettings);
		</script>
		<style id="wp-emoji-styles-inline-css">
			img.wp-smiley,
			img.emoji {
				display: inline !important;
				border: none !important;
				box-shadow: none !important;
				height: 1em !important;
				width: 1em !important;
				margin: 0 0.07em !important;
				vertical-align: -0.1em !important;
				background: none !important;
				padding: 0 !important;
			}
		</style>
		<link
			rel="stylesheet"
			id="wp-block-library-css"
			href="https://www.wbscardb.com/wp-includes/css/dist/block-library/style.min.css?ver=6.5.4"
			media="all"
		/>
		<style id="wp-block-library-theme-inline-css">
			.wp-block-audio figcaption {
				color: #555;
				font-size: 13px;
				text-align: center;
			}
			.is-dark-theme .wp-block-audio figcaption {
				color: #ffffffa6;
			}
			.wp-block-audio {
				margin: 0 0 1em;
			}
			.wp-block-code {
				border: 1px solid #ccc;
				border-radius: 4px;
				font-family: Menlo, Consolas, monaco, monospace;
				padding: 0.8em 1em;
			}
			.wp-block-embed figcaption {
				color: #555;
				font-size: 13px;
				text-align: center;
			}
			.is-dark-theme .wp-block-embed figcaption {
				color: #ffffffa6;
			}
			.wp-block-embed {
				margin: 0 0 1em;
			}
			.blocks-gallery-caption {
				color: #555;
				font-size: 13px;
				text-align: center;
			}
			.is-dark-theme .blocks-gallery-caption {
				color: #ffffffa6;
			}
			.wp-block-image figcaption {
				color: #555;
				font-size: 13px;
				text-align: center;
			}
			.is-dark-theme .wp-block-image figcaption {
				color: #ffffffa6;
			}
			.wp-block-image {
				margin: 0 0 1em;
			}
			.wp-block-pullquote {
				border-bottom: 4px solid;
				border-top: 4px solid;
				color: currentColor;
				margin-bottom: 1.75em;
			}
			.wp-block-pullquote cite,
			.wp-block-pullquote footer,
			.wp-block-pullquote__citation {
				color: currentColor;
				font-size: 0.8125em;
				font-style: normal;
				text-transform: uppercase;
			}
			.wp-block-quote {
				border-left: 0.25em solid;
				margin: 0 0 1.75em;
				padding-left: 1em;
			}
			.wp-block-quote cite,
			.wp-block-quote footer {
				color: currentColor;
				font-size: 0.8125em;
				font-style: normal;
				position: relative;
			}
			.wp-block-quote.has-text-align-right {
				border-left: none;
				border-right: 0.25em solid;
				padding-left: 0;
				padding-right: 1em;
			}
			.wp-block-quote.has-text-align-center {
				border: none;
				padding-left: 0;
			}
			.wp-block-quote.is-large,
			.wp-block-quote.is-style-large,
			.wp-block-quote.is-style-plain {
				border: none;
			}
			.wp-block-search .wp-block-search__label {
				font-weight: 700;
			}
			.wp-block-search__button {
				border: 1px solid #ccc;
				padding: 0.375em 0.625em;
			}
			:where(.wp-block-group.has-background) {
				padding: 1.25em 2.375em;
			}
			.wp-block-separator.has-css-opacity {
				opacity: 0.4;
			}
			.wp-block-separator {
				border: none;
				border-bottom: 2px solid;
				margin-left: auto;
				margin-right: auto;
			}
			.wp-block-separator.has-alpha-channel-opacity {
				opacity: 1;
			}
			.wp-block-separator:not(.is-style-wide):not(.is-style-dots) {
				width: 100px;
			}
			.wp-block-separator.has-background:not(.is-style-dots) {
				border-bottom: none;
				height: 1px;
			}
			.wp-block-separator.has-background:not(.is-style-wide):not(
					.is-style-dots
				) {
				height: 2px;
			}
			.wp-block-table {
				margin: 0 0 1em;
			}
			.wp-block-table td,
			.wp-block-table th {
				word-break: normal;
			}
			.wp-block-table figcaption {
				color: #555;
				font-size: 13px;
				text-align: center;
			}
			.is-dark-theme .wp-block-table figcaption {
				color: #ffffffa6;
			}
			.wp-block-video figcaption {
				color: #555;
				font-size: 13px;
				text-align: center;
			}
			.is-dark-theme .wp-block-video figcaption {
				color: #ffffffa6;
			}
			.wp-block-video {
				margin: 0 0 1em;
			}
			.wp-block-template-part.has-background {
				margin-bottom: 0;
				margin-top: 0;
				padding: 1.25em 2.375em;
			}
		</style>
		<style id="classic-theme-styles-inline-css">
			/*! This file is auto-generated */
			.wp-block-button__link {
				color: #fff;
				background-color: #32373c;
				border-radius: 9999px;
				box-shadow: none;
				text-decoration: none;
				padding: calc(0.667em + 2px) calc(1.333em + 2px);
				font-size: 1.125em;
			}
			.wp-block-file__button {
				background: #32373c;
				color: #fff;
				text-decoration: none;
			}
		</style>
		<style id="global-styles-inline-css">
			body {
				--wp--preset--color--black: #000000;
				--wp--preset--color--cyan-bluish-gray: #abb8c3;
				--wp--preset--color--white: #ffffff;
				--wp--preset--color--pale-pink: #f78da7;
				--wp--preset--color--vivid-red: #cf2e2e;
				--wp--preset--color--luminous-vivid-orange: #ff6900;
				--wp--preset--color--luminous-vivid-amber: #fcb900;
				--wp--preset--color--light-green-cyan: #7bdcb5;
				--wp--preset--color--vivid-green-cyan: #00d084;
				--wp--preset--color--pale-cyan-blue: #8ed1fc;
				--wp--preset--color--vivid-cyan-blue: #0693e3;
				--wp--preset--color--vivid-purple: #9b51e0;
				--wp--preset--color--dark-gray: #28303d;
				--wp--preset--color--gray: #39414d;
				--wp--preset--color--green: #d1e4dd;
				--wp--preset--color--blue: #d1dfe4;
				--wp--preset--color--purple: #d1d1e4;
				--wp--preset--color--red: #e4d1d1;
				--wp--preset--color--orange: #e4dad1;
				--wp--preset--color--yellow: #eeeadd;
				--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(
					135deg,
					rgba(6, 147, 227, 1) 0%,
					rgb(155, 81, 224) 100%
				);
				--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(
					135deg,
					rgb(122, 220, 180) 0%,
					rgb(0, 208, 130) 100%
				);
				--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(
					135deg,
					rgba(252, 185, 0, 1) 0%,
					rgba(255, 105, 0, 1) 100%
				);
				--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(
					135deg,
					rgba(255, 105, 0, 1) 0%,
					rgb(207, 46, 46) 100%
				);
				--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(
					135deg,
					rgb(238, 238, 238) 0%,
					rgb(169, 184, 195) 100%
				);
				--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(
					135deg,
					rgb(74, 234, 220) 0%,
					rgb(151, 120, 209) 20%,
					rgb(207, 42, 186) 40%,
					rgb(238, 44, 130) 60%,
					rgb(251, 105, 98) 80%,
					rgb(254, 248, 76) 100%
				);
				--wp--preset--gradient--blush-light-purple: linear-gradient(
					135deg,
					rgb(255, 206, 236) 0%,
					rgb(152, 150, 240) 100%
				);
				--wp--preset--gradient--blush-bordeaux: linear-gradient(
					135deg,
					rgb(254, 205, 165) 0%,
					rgb(254, 45, 45) 50%,
					rgb(107, 0, 62) 100%
				);
				--wp--preset--gradient--luminous-dusk: linear-gradient(
					135deg,
					rgb(255, 203, 112) 0%,
					rgb(199, 81, 192) 50%,
					rgb(65, 88, 208) 100%
				);
				--wp--preset--gradient--pale-ocean: linear-gradient(
					135deg,
					rgb(255, 245, 203) 0%,
					rgb(182, 227, 212) 50%,
					rgb(51, 167, 181) 100%
				);
				--wp--preset--gradient--electric-grass: linear-gradient(
					135deg,
					rgb(202, 248, 128) 0%,
					rgb(113, 206, 126) 100%
				);
				--wp--preset--gradient--midnight: linear-gradient(
					135deg,
					rgb(2, 3, 129) 0%,
					rgb(40, 116, 252) 100%
				);
				--wp--preset--gradient--purple-to-yellow: linear-gradient(
					160deg,
					#d1d1e4 0%,
					#eeeadd 100%
				);
				--wp--preset--gradient--yellow-to-purple: linear-gradient(
					160deg,
					#eeeadd 0%,
					#d1d1e4 100%
				);
				--wp--preset--gradient--green-to-yellow: linear-gradient(
					160deg,
					#d1e4dd 0%,
					#eeeadd 100%
				);
				--wp--preset--gradient--yellow-to-green: linear-gradient(
					160deg,
					#eeeadd 0%,
					#d1e4dd 100%
				);
				--wp--preset--gradient--red-to-yellow: linear-gradient(
					160deg,
					#e4d1d1 0%,
					#eeeadd 100%
				);
				--wp--preset--gradient--yellow-to-red: linear-gradient(
					160deg,
					#eeeadd 0%,
					#e4d1d1 100%
				);
				--wp--preset--gradient--purple-to-red: linear-gradient(
					160deg,
					#d1d1e4 0%,
					#e4d1d1 100%
				);
				--wp--preset--gradient--red-to-purple: linear-gradient(
					160deg,
					#e4d1d1 0%,
					#d1d1e4 100%
				);
				--wp--preset--font-size--small: 18px;
				--wp--preset--font-size--medium: 20px;
				--wp--preset--font-size--large: 24px;
				--wp--preset--font-size--x-large: 42px;
				--wp--preset--font-size--extra-small: 16px;
				--wp--preset--font-size--normal: 20px;
				--wp--preset--font-size--extra-large: 40px;
				--wp--preset--font-size--huge: 96px;
				--wp--preset--font-size--gigantic: 144px;
				--wp--preset--spacing--20: 0.44rem;
				--wp--preset--spacing--30: 0.67rem;
				--wp--preset--spacing--40: 1rem;
				--wp--preset--spacing--50: 1.5rem;
				--wp--preset--spacing--60: 2.25rem;
				--wp--preset--spacing--70: 3.38rem;
				--wp--preset--spacing--80: 5.06rem;
				--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
				--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
				--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
				--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1),
					6px 6px rgba(0, 0, 0, 1);
				--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
			}
			:where(.is-layout-flex) {
				gap: 0.5em;
			}
			:where(.is-layout-grid) {
				gap: 0.5em;
			}
			body .is-layout-flex {
				display: flex;
			}
			body .is-layout-flex {
				flex-wrap: wrap;
				align-items: center;
			}
			body .is-layout-flex > * {
				margin: 0;
			}
			body .is-layout-grid {
				display: grid;
			}
			body .is-layout-grid > * {
				margin: 0;
			}
			:where(.wp-block-columns.is-layout-flex) {
				gap: 2em;
			}
			:where(.wp-block-columns.is-layout-grid) {
				gap: 2em;
			}
			:where(.wp-block-post-template.is-layout-flex) {
				gap: 1.25em;
			}
			:where(.wp-block-post-template.is-layout-grid) {
				gap: 1.25em;
			}
			.has-black-color {
				color: var(--wp--preset--color--black) !important;
			}
			.has-cyan-bluish-gray-color {
				color: var(--wp--preset--color--cyan-bluish-gray) !important;
			}
			.has-white-color {
				color: var(--wp--preset--color--white) !important;
			}
			.has-pale-pink-color {
				color: var(--wp--preset--color--pale-pink) !important;
			}
			.has-vivid-red-color {
				color: var(--wp--preset--color--vivid-red) !important;
			}
			.has-luminous-vivid-orange-color {
				color: var(--wp--preset--color--luminous-vivid-orange) !important;
			}
			.has-luminous-vivid-amber-color {
				color: var(--wp--preset--color--luminous-vivid-amber) !important;
			}
			.has-light-green-cyan-color {
				color: var(--wp--preset--color--light-green-cyan) !important;
			}
			.has-vivid-green-cyan-color {
				color: var(--wp--preset--color--vivid-green-cyan) !important;
			}
			.has-pale-cyan-blue-color {
				color: var(--wp--preset--color--pale-cyan-blue) !important;
			}
			.has-vivid-cyan-blue-color {
				color: var(--wp--preset--color--vivid-cyan-blue) !important;
			}
			.has-vivid-purple-color {
				color: var(--wp--preset--color--vivid-purple) !important;
			}
			.has-black-background-color {
				background-color: var(--wp--preset--color--black) !important;
			}
			.has-cyan-bluish-gray-background-color {
				background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
			}
			.has-white-background-color {
				background-color: var(--wp--preset--color--white) !important;
			}
			.has-pale-pink-background-color {
				background-color: var(--wp--preset--color--pale-pink) !important;
			}
			.has-vivid-red-background-color {
				background-color: var(--wp--preset--color--vivid-red) !important;
			}
			.has-luminous-vivid-orange-background-color {
				background-color: var(
					--wp--preset--color--luminous-vivid-orange
				) !important;
			}
			.has-luminous-vivid-amber-background-color {
				background-color: var(
					--wp--preset--color--luminous-vivid-amber
				) !important;
			}
			.has-light-green-cyan-background-color {
				background-color: var(--wp--preset--color--light-green-cyan) !important;
			}
			.has-vivid-green-cyan-background-color {
				background-color: var(--wp--preset--color--vivid-green-cyan) !important;
			}
			.has-pale-cyan-blue-background-color {
				background-color: var(--wp--preset--color--pale-cyan-blue) !important;
			}
			.has-vivid-cyan-blue-background-color {
				background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
			}
			.has-vivid-purple-background-color {
				background-color: var(--wp--preset--color--vivid-purple) !important;
			}
			.has-black-border-color {
				border-color: var(--wp--preset--color--black) !important;
			}
			.has-cyan-bluish-gray-border-color {
				border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
			}
			.has-white-border-color {
				border-color: var(--wp--preset--color--white) !important;
			}
			.has-pale-pink-border-color {
				border-color: var(--wp--preset--color--pale-pink) !important;
			}
			.has-vivid-red-border-color {
				border-color: var(--wp--preset--color--vivid-red) !important;
			}
			.has-luminous-vivid-orange-border-color {
				border-color: var(
					--wp--preset--color--luminous-vivid-orange
				) !important;
			}
			.has-luminous-vivid-amber-border-color {
				border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
			}
			.has-light-green-cyan-border-color {
				border-color: var(--wp--preset--color--light-green-cyan) !important;
			}
			.has-vivid-green-cyan-border-color {
				border-color: var(--wp--preset--color--vivid-green-cyan) !important;
			}
			.has-pale-cyan-blue-border-color {
				border-color: var(--wp--preset--color--pale-cyan-blue) !important;
			}
			.has-vivid-cyan-blue-border-color {
				border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
			}
			.has-vivid-purple-border-color {
				border-color: var(--wp--preset--color--vivid-purple) !important;
			}
			.has-vivid-cyan-blue-to-vivid-purple-gradient-background {
				background: var(
					--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple
				) !important;
			}
			.has-light-green-cyan-to-vivid-green-cyan-gradient-background {
				background: var(
					--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan
				) !important;
			}
			.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
				background: var(
					--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange
				) !important;
			}
			.has-luminous-vivid-orange-to-vivid-red-gradient-background {
				background: var(
					--wp--preset--gradient--luminous-vivid-orange-to-vivid-red
				) !important;
			}
			.has-very-light-gray-to-cyan-bluish-gray-gradient-background {
				background: var(
					--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray
				) !important;
			}
			.has-cool-to-warm-spectrum-gradient-background {
				background: var(
					--wp--preset--gradient--cool-to-warm-spectrum
				) !important;
			}
			.has-blush-light-purple-gradient-background {
				background: var(--wp--preset--gradient--blush-light-purple) !important;
			}
			.has-blush-bordeaux-gradient-background {
				background: var(--wp--preset--gradient--blush-bordeaux) !important;
			}
			.has-luminous-dusk-gradient-background {
				background: var(--wp--preset--gradient--luminous-dusk) !important;
			}
			.has-pale-ocean-gradient-background {
				background: var(--wp--preset--gradient--pale-ocean) !important;
			}
			.has-electric-grass-gradient-background {
				background: var(--wp--preset--gradient--electric-grass) !important;
			}
			.has-midnight-gradient-background {
				background: var(--wp--preset--gradient--midnight) !important;
			}
			.has-small-font-size {
				font-size: var(--wp--preset--font-size--small) !important;
			}
			.has-medium-font-size {
				font-size: var(--wp--preset--font-size--medium) !important;
			}
			.has-large-font-size {
				font-size: var(--wp--preset--font-size--large) !important;
			}
			.has-x-large-font-size {
				font-size: var(--wp--preset--font-size--x-large) !important;
			}
			.wp-block-navigation a:where(:not(.wp-element-button)) {
				color: inherit;
			}
			:where(.wp-block-post-template.is-layout-flex) {
				gap: 1.25em;
			}
			:where(.wp-block-post-template.is-layout-grid) {
				gap: 1.25em;
			}
			:where(.wp-block-columns.is-layout-flex) {
				gap: 2em;
			}
			:where(.wp-block-columns.is-layout-grid) {
				gap: 2em;
			}
			.wp-block-pullquote {
				font-size: 1.5em;
				line-height: 1.6;
			}
		</style>
		<link
			rel="stylesheet"
			id="dashicons-css"
			href="https://www.wbscardb.com/wp-includes/css/dashicons.min.css?ver=6.5.4"
			media="all"
		/>
		<link
			rel="stylesheet"
			id="bootstrap_css-css"
			href="https://www.wbscardb.com/wp-content/themes/WBSCARDB-child/assets/css/bootstrap.css?ver=null"
			media="all"
		/>
		<link
			rel="stylesheet"
			id="awesome_css-css"
			href="https://www.wbscardb.com/wp-content/themes/WBSCARDB-child/assets/css/font-awesome.css?ver=null"
			media="all"
		/>
		<link
			rel="stylesheet"
			id="apps_css-css"
			href="https://www.wbscardb.com/wp-content/themes/WBSCARDB-child/assets/css/apps.css?ver=null"
			media="all"
		/>
		<link
			rel="stylesheet"
			id="apps_inner_css-css"
			href="https://www.wbscardb.com/wp-content/themes/WBSCARDB-child/assets/css/apps_inner.css?ver=null"
			media="all"
		/>
		<link
			rel="stylesheet"
			id="slick_css-css"
			href="https://www.wbscardb.com/wp-content/themes/WBSCARDB-child/assets/slick/slick.css?ver=null"
			media="all"
		/>
		<link
			rel="stylesheet"
			id="slickTheme_css-css"
			href="https://www.wbscardb.com/wp-content/themes/WBSCARDB-child/assets/slick/slick-theme.css?ver=null"
			media="all"
		/>
		<link
			rel="stylesheet"
			id="twenty-twenty-one-style-css"
			href="https://www.wbscardb.com/wp-content/themes/WBSCARDB/style.css?ver=1.2"
			media="all"
		/>
		<style id="twenty-twenty-one-style-inline-css">
			:root {
				--global--color-background: #ffffff;
				--global--color-primary: #000;
				--global--color-secondary: #000;
				--button--color-background: #000;
				--button--color-text-hover: #000;
			}
		</style>
		<link
			rel="stylesheet"
			id="twenty-twenty-one-print-style-css"
			href="https://www.wbscardb.com/wp-content/themes/WBSCARDB/assets/css/print.css?ver=1.2"
			media="print"
		/>
		<link rel="https://api.w.org/" href="https://www.wbscardb.com/wp-json/" />
		<link
			rel="alternate"
			type="application/json"
			href="https://www.wbscardb.com/wp-json/wp/v2/pages/123"
		/>
		<link
			rel="EditURI"
			type="application/rsd+xml"
			title="RSD"
			href="https://www.wbscardb.com/xmlrpc.php?rsd"
		/>
		<meta name="generator" content="WordPress 6.5.4" />
		<link
			rel="canonical"
			href="https://www.wbscardb.com/about-us/the-organization/"
		/>
		<link rel="shortlink" href="https://www.wbscardb.com/?p=123" />
		<link
			rel="alternate"
			type="application/json+oembed"
			href="https://www.wbscardb.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.wbscardb.com%2Fabout-us%2Fthe-organization%2F"
		/>
		<link
			rel="alternate"
			type="text/xml+oembed"
			href="https://www.wbscardb.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.wbscardb.com%2Fabout-us%2Fthe-organization%2F&#038;format=xml"
		/>
		<link
			rel="shortcut icon"
			type="image/x-icon"
			href="https://www.wbscardb.com/wp-content/themes/WBSCARDB-child/favicon.ico"
		/>
		<style id="custom-background-css">
			body.custom-background {
				background-color: #ffffff;
			}
		</style>

		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"
		/>

		<link
			rel="stylesheet"
			href="https://www.wbscardb.com/wp-content/themes/WBSCARDB-child/assets/css/gallery.css"
		/>

		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css"
		/>

		<link
			rel="stylesheet"
			type="text/css"
			href="https://www.wbscardb.com/wp-content/themes/WBSCARDB-child/assets/slick/slick.css"
		/>

		<link
			rel="stylesheet"
			type="text/css"
			href="https://www.wbscardb.com/wp-content/themes/WBSCARDB-child/assets/slick/slick-theme.css"
		/>

		<link
			rel="stylesheet"
			href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
		/>

		<!--<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>-->

		<link
			rel="stylesheet"
			href="https://www.wbscardb.com/wp-content/themes/WBSCARDB-child/assets/mobileMenu/jquery.mCustomScrollbar.min.css"
		/>

		<link
			rel="stylesheet"
			href="https://www.wbscardb.com/wp-content/themes/WBSCARDB-child/assets/mobileMenu/style.css"
		/>

		<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>-->

		<script
			src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
			integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		></script>

		<link
			rel="stylesheet"
			href="https://www.wbscardb.com/wp-content/themes/WBSCARDB-child/assets/css/res.css"
		/>
	</head>

	<body
		class="page-template-default page page-id-123 page-child parent-pageid-8 custom-background wp-embed-responsive is-light-theme has-background-white no-js singular"
	>
		<!-- expired/post-promotion week content -->

		<!-- expired/post-promotion week content -->

		<!--<div class="pageloadingPopup">

	<div class="pageloadingPopupSub">

    <a href="javascript:void(0)" id="popupCloseId" class="popupCloseClass"><i class="fa fa-times" aria-hidden="true"></i></a>



    <img src="/assets/images/newyear.png" alt=""/></div>

</div>-->

		<div id="page" class="site">
			<!--

	<div id="content" class="site-content">

		<div id="primary" class="content-area">

			<main id="main" class="site-main" role="main">

-->

			<header class="topHeader">
				<section class="wrapper">
					<section class="navSection">
						<section class="logoSection">
							<a href="https://www.wbscardb.com/" title="WBSCARDB" rel="home"
								><img
									src="https://www.wbscardb.com/wp-content/themes/WBSCARDB-child/assets/images/logo.png"
									alt=""
							/></a>
						</section>

						<section class="logoRightSection">
							<ul class="location">
								<li class="phoneLi">
									<i class="fa fa-phone" aria-hidden="true"></i>
									<a href="tel:(033) 2356-0018">(033) 2356-0018</a><br />

									<a href="tel:(033) 2356-0028">(033) 2356-0028</a>
								</li>

								<li class="addressTop">
									<i class="fa fa-map-marker" aria-hidden="true"></i> ICMARD
									Building, 6TH Floor,Block-14/2,C.I.T. Scheme-VIII (M),
									Ultadanga,Kolkata-700 067
								</li>

								<li class="hallBookingLi">
									<!--<a href="https://booking.wbscardb.com" class="hallBooking" target="_blank"><i class="fa fa-calendar" aria-hidden="true"></i>  Accommodation / Hall Booking</a>-->

									<a
										href="https://booking.wbscardb.com/"
										target="_blank"
										class="hallBooking"
										><i class="fa fa-calendar" aria-hidden="true"></i>
										Accommodation / Hall Booking</a
									>
								</li>

								<li class="hallBookingLi">
									<!--<a href="https://booking.wbscardb.com" class="hallBooking" target="_blank"><i class="fa fa-calendar" aria-hidden="true"></i>  Accommodation / Hall Booking</a>-->

									<a
										href="https://accounts.google.com/v3/signin/identifier?dsh=S805598620%3A1680260679260966&continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&ifkv=AQMjQ7TMcTg2ntNczYX7DlfJAuTexHC6_cdrwbmm_UYH49kh2njC_v3Y1cZvVvKw6bQesUzyMm_j&osid=1&passive=1209600&service=mail&flowName=GlifWebSignIn&flowEntry=ServiceLogin"
										target="_blank"
										class="hallBooking"
										><i class="fa fa-envelope" aria-hidden="true"></i> Email</a
									>
								</li>
							</ul>
						</section>

						<div class="navSecMobile">
							<!--<a class="hallBooking_Float" href="https://www.wbscardb.com/branches-network/training-centre/accommodation-hall-booking/" role="button"><i class="fa fa-calendar" aria-hidden="true"></i>  Accommodation Booking</a>-->

							<a
								class="open-menu btnResponsive"
								href="#"
								role="button"
								onClick="openFun()"
								><i class="fa fa-bars" aria-hidden="true"></i
							></a>

							<nav class="sidebar" id="sidebarId">
								<!-- close sidebar menu -->

								<div class="dismiss" onClick="closeFun()">
									<i class="fa fa-angle-right" aria-hidden="true"></i>
								</div>

								<div class="logoSidebar">
									<a
										href="https://www.wbscardb.com/"
										title="WBSCARDB"
										rel="home"
										><img
											src="https://www.wbscardb.com/wp-content/themes/WBSCARDB-child/assets/images/logo.png"
											alt=""
									/></a>
								</div>

								<ul class="list-unstyled menu-elements">
									<li>
										<a class="scroll-link" href="https://www.wbscardb.com/"
											><i class="fa fa-caret-right" aria-hidden="true"></i>Home
										</a>
									</li>

									<li>
										<a
											href="#otherSections"
											data-toggle="collapse"
											aria-expanded="false"
											class="dropdown-toggle"
											role="button"
											aria-controls="otherSections"
										>
											<i class="fa fa-caret-right" aria-hidden="true"></i>

											About
										</a>

										<ul class="collapse list-unstyled" id="otherSections">
											<li>
												<a
													class="scroll-link"
													href="https://www.wbscardb.com/about-us/the-organization"
													><i class="fa fa-caret-right" aria-hidden="true"></i
													>The Organization</a
												>
											</li>

											<li>
												<a
													class="scroll-link"
													href="https://www.wbscardb.com/about-us/objective-mission"
													><i class="fa fa-caret-right" aria-hidden="true"></i
													>Objective &amp; Mission</a
												>
											</li>

											<li>
												<a
													class="scroll-link"
													href="https://www.wbscardb.com/about-us/salient-features/"
													><i class="fa fa-caret-right" aria-hidden="true"></i
													>Salient Features</a
												>
											</li>

											<li>
												<a
													class="scroll-link"
													href="https://www.wbscardb.com/about-us/board-of-director"
													><i class="fa fa-caret-right" aria-hidden="true"></i
													>Board Of Director</a
												>
											</li>

											<li>
												<a
													class="scroll-link"
													href="https://www.wbscardb.com/about-us/from-the-chairman"
													><i class="fa fa-caret-right" aria-hidden="true"></i
													>From The Chairman</a
												>
											</li>
										</ul>
									</li>

									<li>
										<a
											href="#otherSections2"
											data-toggle="collapse"
											aria-expanded="false"
											class="dropdown-toggle"
											role="button"
											aria-controls="otherSections"
										>
											<i class="fa fa-caret-right" aria-hidden="true"></i
											>Branches Network</a
										>

										<ul class="collapse list-unstyled" id="otherSections2">
											<li>
												<a
													class="scroll-link"
													href="https://www.wbscardb.com/branches-network/"
													><i class="fa fa-caret-right" aria-hidden="true"></i
													>Branches Network</a
												>
											</li>

											<li>
												<a
													class="scroll-link"
													href="https://www.wbscardb.com/branches-network/list-of-branches/"
													><i class="fa fa-caret-right" aria-hidden="true"></i
													>List of Branches</a
												>
											</li>

											<li>
												<a
													class="scroll-link"
													href="https://www.wbscardb.com/branches-network/lists-of-ardbs-member-banks/"
													><i class="fa fa-caret-right" aria-hidden="true"></i
													>Lists of ARDBs/Member Banks</a
												>
											</li>

											<li>
												<a
													class="scroll-link"
													href="https://www.wbscardb.com/branches-network/training-centre/"
													><i class="fa fa-caret-right" aria-hidden="true"></i
													>Training Centre</a
												>
											</li>
										</ul>
									</li>

									<li>
										<a
											href="#otherSections3"
											data-toggle="collapse"
											aria-expanded="false"
											class="dropdown-toggle"
											role="button"
											aria-controls="otherSections"
										>
											<i class="fa fa-caret-right" aria-hidden="true"></i
											>Product & Services</a
										>

										<ul class="collapse list-unstyled" id="otherSections3">
											<li>
												<a
													class="scroll-link"
													href="https://www.wbscardb.com/product-services/"
													><i class="fa fa-caret-right" aria-hidden="true"></i
													>Product & Services</a
												>
											</li>

											<li>
												<a
													class="scroll-link"
													href="https://www.wbscardb.com/deposit"
													><i class="fa fa-caret-right" aria-hidden="true"></i
													>Deposit</a
												>
											</li>

											<li>
												<a
													class="scroll-link"
													href="https://www.wbscardb.com/loans-advances/"
													><i class="fa fa-caret-right" aria-hidden="true"></i
													>Loans &amp; Advances</a
												>
											</li>

											<li>
												<a
													class="scroll-link"
													href="https://www.wbscardb.com/refinances/"
													><i class="fa fa-caret-right" aria-hidden="true"></i
													>Refinances</a
												>
											</li>
										</ul>
									</li>

									<li>
										<a
											class="scroll-link"
											href="https://www.wbscardb.com/interest-rate/"
											><i class="fa fa-caret-right" aria-hidden="true"></i
											>Interest Rate</a
										>
									</li>

									<li>
										<a
											class="scroll-link"
											href="https://www.wbscardb.com/financial-statements/"
											><i class="fa fa-caret-right" aria-hidden="true"></i
											>Financial Statements
										</a>
									</li>

									<li>
										<a
											href="#otherSections4"
											data-toggle="collapse"
											aria-expanded="false"
											class="dropdown-toggle"
											role="button"
											aria-controls="otherSections"
										>
											<i class="fa fa-caret-right" aria-hidden="true"></i
											>Notices</a
										>

										<ul class="collapse list-unstyled" id="otherSections4">
											<li>
												<a
													class="scroll-link"
													href="https://www.wbscardb.com/notices/"
													><i class="fa fa-caret-right" aria-hidden="true"></i
													>Notices</a
												>
											</li>

											<li>
												<a
													class="scroll-link"
													href="https://www.wbscardb.com/inter-office-circular/"
													><i class="fa fa-caret-right" aria-hidden="true"></i
													>Inter Office Circular</a
												>
											</li>
										</ul>
									</li>

									<li>
										<a
											class="scroll-link"
											href="https://www.wbscardb.com/gallery/"
											><i class="fa fa-caret-right" aria-hidden="true"></i
											>Gallery
										</a>
									</li>

									<li>
										<a
											class="scroll-link"
											href="https://www.wbscardb.com/contact-us/"
											><i class="fa fa-caret-right" aria-hidden="true"></i
											>Contact Us
										</a>
									</li>

									<li>
										<a
											href="#otherSections5"
											data-toggle="collapse"
											aria-expanded="false"
											class="dropdown-toggle"
											role="button"
											aria-controls="otherSections"
										>
											<i class="fa fa-caret-right" aria-hidden="true"></i>Nach
											Registration</a
										>

										<ul class="collapse list-unstyled" id="otherSections5">
											<li>
												<a
													class="scroll-link"
													href="https://www.wbscardb.com/e_nach/index.php/manreg/"
													><i class="fa fa-caret-right" aria-hidden="true"></i
													>Register</a
												>
											</li>

											<li>
												<a
													class="scroll-link" target="_blank"
													href="https://www.wbscardb.com/e_nach/index.php/login/"
													><i class="fa fa-caret-right" aria-hidden="true"></i
													>Admin Login</a
												>
											</li>
										</ul>
									</li>
								</ul>

								<div class="navSecResponsiv">
									<ul class="rightNav">
										<li id="mem_logRes">
											<a
												href="https://www.wbscardb.com/branches-network/training-centre/accommodation-hall-booking/"
												class="hallBooking"
												><span class="borderBtnSolid"
													><i class="fa fa-calendar" aria-hidden="true"></i>
													Accommodation / Hall Booking</span
												></a
											>
										</li>
									</ul>
								</div>
							</nav>
						</div>
					</section>
				</section>
			</header>

			<section class="navSec">
				<section class="wrapper navMenu">
					<!--

	<ul>

	<li><a href="#">Home</a></li>

	<li><a href="#">About Us</a></li>

	<li><a href="#">Product & Services</a></li>

	<li><a href="#">Interest Rate</a></li>

	<li><a href="#">Financial Statements</a></li>

	<li><a href="#">Gallery</a></li>

	<li><a href="#">Notices</a></li>

	<li><a href="#">Feedback</a></li>

	<li><a href="#">Contact Us</a></li>

	</ul>

-->

					<div class="menu-top-menu-container">
						<ul id="menu-top-menu" class="navMenuUl">
							<li
								id="menu-item-7"
								class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-7"
							>
								<a href="https://www.wbscardb.com/">Home</a>
							</li>
							<li
								id="menu-item-126"
								class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-126"
							>
								<a href="#">About Us</a
								><button
									class="sub-menu-toggle"
									aria-expanded="false"
									onClick="twentytwentyoneExpandSubMenu(this)"
								>
									<span class="icon-plus"
										><svg
											class="svg-icon"
											width="18"
											height="18"
											aria-hidden="true"
											role="img"
											focusable="false"
											viewBox="0 0 24 24"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<path
												fill-rule="evenodd"
												clip-rule="evenodd"
												d="M18 11.2h-5.2V6h-1.6v5.2H6v1.6h5.2V18h1.6v-5.2H18z"
												fill="currentColor"
											/></svg></span
									><span class="icon-minus"
										><svg
											class="svg-icon"
											width="18"
											height="18"
											aria-hidden="true"
											role="img"
											focusable="false"
											viewBox="0 0 24 24"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<path
												fill-rule="evenodd"
												clip-rule="evenodd"
												d="M6 11h12v2H6z"
												fill="currentColor"
											/></svg></span
									><span class="screen-reader-text">Open menu</span>
								</button>
								<ul class="sub-menu">
									<li
										id="menu-item-127"
										class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-123 current_page_item menu-item-127"
									>
										<a
											href="https://www.wbscardb.com/about-us/the-organization/"
											aria-current="page"
											>The Organization</a
										>
									</li>
									<li
										id="menu-item-130"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-130"
									>
										<a
											href="https://www.wbscardb.com/about-us/objective-mission/"
											>Objective &#038; Mission</a
										>
									</li>
									<li
										id="menu-item-136"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-136"
									>
										<a
											href="https://www.wbscardb.com/about-us/board-of-director/"
											>Board of Directors</a
										>
									</li>
									<li
										id="menu-item-592"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-592"
									>
										<a href="https://www.wbscardb.com/achievements/"
											>Achievements</a
										>
									</li>
									<li
										id="menu-item-684"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-684"
									>
										<a href="https://www.wbscardb.com/shg-jlg/">SHG/JLG</a>
									</li>
									<li
										id="menu-item-139"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-139"
									>
										<a
											href="https://www.wbscardb.com/about-us/from-the-chairman/"
											>From The Chairman</a
										>
									</li>
								</ul>
							</li>
							<li
								id="menu-item-145"
								class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-145"
							>
								<a href="https://www.wbscardb.com/branches-network/"
									>Branches Network</a
								><button
									class="sub-menu-toggle"
									aria-expanded="false"
									onClick="twentytwentyoneExpandSubMenu(this)"
								>
									<span class="icon-plus"
										><svg
											class="svg-icon"
											width="18"
											height="18"
											aria-hidden="true"
											role="img"
											focusable="false"
											viewBox="0 0 24 24"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<path
												fill-rule="evenodd"
												clip-rule="evenodd"
												d="M18 11.2h-5.2V6h-1.6v5.2H6v1.6h5.2V18h1.6v-5.2H18z"
												fill="currentColor"
											/></svg></span
									><span class="icon-minus"
										><svg
											class="svg-icon"
											width="18"
											height="18"
											aria-hidden="true"
											role="img"
											focusable="false"
											viewBox="0 0 24 24"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<path
												fill-rule="evenodd"
												clip-rule="evenodd"
												d="M6 11h12v2H6z"
												fill="currentColor"
											/></svg></span
									><span class="screen-reader-text">Open menu</span>
								</button>
								<ul class="sub-menu">
									<li
										id="menu-item-146"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-146"
									>
										<a
											href="https://www.wbscardb.com/branches-network/list-of-branches/"
											>List of Branches</a
										>
									</li>
									<li
										id="menu-item-149"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-149"
									>
										<a
											href="https://www.wbscardb.com/branches-network/lists-of-ardbs-member-banks/"
											>Lists of ARDBs/Member Banks</a
										>
									</li>
									<li
										id="menu-item-150"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-150"
									>
										<a
											href="https://www.wbscardb.com/branches-network/training-centre/"
											>Training Centre</a
										>
									</li>
									<li
										id="menu-item-636"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-636"
									>
										<a
											href="https://www.wbscardb.com/branches-network/training-centre/training-calendars/"
											>Training Calendars</a
										>
									</li>
									<li
										id="menu-item-635"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-635"
									>
										<a
											href="https://www.wbscardb.com/branches-network/training-centre/accommodation-hall-booking/"
											>Accommodation/Hall Booking</a
										>
									</li>
								</ul>
							</li>
							<li
								id="menu-item-32"
								class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-32"
							>
								<a href="https://www.wbscardb.com/product-services/"
									>Product &#038; Services</a
								><button
									class="sub-menu-toggle"
									aria-expanded="false"
									onClick="twentytwentyoneExpandSubMenu(this)"
								>
									<span class="icon-plus"
										><svg
											class="svg-icon"
											width="18"
											height="18"
											aria-hidden="true"
											role="img"
											focusable="false"
											viewBox="0 0 24 24"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<path
												fill-rule="evenodd"
												clip-rule="evenodd"
												d="M18 11.2h-5.2V6h-1.6v5.2H6v1.6h5.2V18h1.6v-5.2H18z"
												fill="currentColor"
											/></svg></span
									><span class="icon-minus"
										><svg
											class="svg-icon"
											width="18"
											height="18"
											aria-hidden="true"
											role="img"
											focusable="false"
											viewBox="0 0 24 24"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<path
												fill-rule="evenodd"
												clip-rule="evenodd"
												d="M6 11h12v2H6z"
												fill="currentColor"
											/></svg></span
									><span class="screen-reader-text">Open menu</span>
								</button>
								<ul class="sub-menu">
									<li
										id="menu-item-151"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-151"
									>
										<a href="https://www.wbscardb.com/deposit/">Deposit</a>
									</li>
									<li
										id="menu-item-152"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-152"
									>
										<a href="https://www.wbscardb.com/loans-advances/"
											>Loans &#038; Advances</a
										>
									</li>
									<li
										id="menu-item-153"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-153"
									>
										<a href="https://www.wbscardb.com/refinances/"
											>Refinance Policy</a
										>
									</li>
									<li
										id="menu-item-586"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-586"
									>
										<a href="https://www.wbscardb.com/third-party-product-2/"
											>Third Party Product</a
										>
									</li>
								</ul>
							</li>
							<li
								id="menu-item-560"
								class="menu-item menu-item-type-post_type menu-item-object-page menu-item-560"
							>
								<a href="https://www.wbscardb.com/interest-rate/"
									>Interest Rate</a
								>
							</li>
							<li
								id="menu-item-28"
								class="menu-item menu-item-type-post_type menu-item-object-page menu-item-28"
							>
								<a href="https://www.wbscardb.com/financial-statements/"
									>Financial Statements</a
								>
							</li>
							<li
								id="menu-item-31"
								class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-31"
							>
								<a href="https://www.wbscardb.com/notices/">Notices</a
								><button
									class="sub-menu-toggle"
									aria-expanded="false"
									onClick="twentytwentyoneExpandSubMenu(this)"
								>
									<span class="icon-plus"
										><svg
											class="svg-icon"
											width="18"
											height="18"
											aria-hidden="true"
											role="img"
											focusable="false"
											viewBox="0 0 24 24"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<path
												fill-rule="evenodd"
												clip-rule="evenodd"
												d="M18 11.2h-5.2V6h-1.6v5.2H6v1.6h5.2V18h1.6v-5.2H18z"
												fill="currentColor"
											/></svg></span
									><span class="icon-minus"
										><svg
											class="svg-icon"
											width="18"
											height="18"
											aria-hidden="true"
											role="img"
											focusable="false"
											viewBox="0 0 24 24"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<path
												fill-rule="evenodd"
												clip-rule="evenodd"
												d="M6 11h12v2H6z"
												fill="currentColor"
											/></svg></span
									><span class="screen-reader-text">Open menu</span>
								</button>
								<ul class="sub-menu">
									<li
										id="menu-item-157"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-157"
									>
										<a href="https://www.wbscardb.com/inter-office-circular/"
											>Inter-Office Circular</a
										>
									</li>
									<li
										id="menu-item-601"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-601"
									>
										<a href="https://www.wbscardb.com/tenders-quotation/"
											>Tenders &#038; Quotation</a
										>
									</li>
								</ul>
							</li>
							<li
								id="menu-item-29"
								class="menu-item menu-item-type-post_type menu-item-object-page menu-item-29"
							>
								<a href="https://www.wbscardb.com/gallery/">Gallery</a>
							</li>
							<li
								id="menu-item-26"
								class="menu-item menu-item-type-post_type menu-item-object-page menu-item-26"
							>
								<a href="https://www.wbscardb.com/contact-us/">Contact Us</a>
							</li>
							<li
								id="menu-item-1067"
								class="lastLink menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1067"
							>
								<a href="#">Nach Registration</a
								><button
									class="sub-menu-toggle"
									aria-expanded="false"
									onClick="twentytwentyoneExpandSubMenu(this)"
								>
									<span class="icon-plus"
										><svg
											class="svg-icon"
											width="18"
											height="18"
											aria-hidden="true"
											role="img"
											focusable="false"
											viewBox="0 0 24 24"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<path
												fill-rule="evenodd"
												clip-rule="evenodd"
												d="M18 11.2h-5.2V6h-1.6v5.2H6v1.6h5.2V18h1.6v-5.2H18z"
												fill="currentColor"
											/></svg></span
									><span class="icon-minus"
										><svg
											class="svg-icon"
											width="18"
											height="18"
											aria-hidden="true"
											role="img"
											focusable="false"
											viewBox="0 0 24 24"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<path
												fill-rule="evenodd"
												clip-rule="evenodd"
												d="M6 11h12v2H6z"
												fill="currentColor"
											/></svg></span
									><span class="screen-reader-text">Open menu</span>
								</button>
								<ul class="sub-menu">
									<li
										id="menu-item-1068"
										class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1068"
									>
										<a href="https://www.wbscardb.com/e_nach/index.php/manreg/"
											>Register</a
										>
									</li>
									<li
										id="menu-item-1069"
										class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1069"
									>
										<a href="https://www.wbscardb.com/e_nach/index.php/login/" target="_blank"
											>Admin Login</a
										>
									</li>
								</ul>
							</li>
						</ul>
					</div>

					<br clear="all" />
				</section>
			</section>

			<div class="bannerSecInner">
				<div class="wrapper">
					<div class="col-sm-12">
						<h2><?= $data['header'] ?></h2>
					</div>
				</div>
			</div>

			<div class="innerContentSec">
				<div class="wrapper">
                    <div class="row" id="loader" style="display: none;">
                        <div class="col-md-12">
                            <div class="loading img-center"></div>
                        </div>
                    </div>
                    <div id="display-content">
                        <div class="col-sm-12 float-left innerContentTxt">
                            <!-- <h1>eMandate Registration</h1> -->
                            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.1/dist/sweetalert2.all.min.js"></script>
                            <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.1/dist/sweetalert2.min.css" rel="stylesheet">
                            <link rel="stylesheet" href="<?= base_url() ?>assets/css/vertical-layout-light/style.css">
                            <link rel="stylesheet" href="<?= base_url() ?>assets/css/custom-style.css">
                            <script>
                                function triggerSweetAlert(title, msg, status){
                                    Swal.fire({
                                    title: title,
                                    text: msg,
                                    icon: status
                                    });
                                }
                                </script>
                            <?php $this->load->view('eMandate/entry', $data) ?>
                        </div>
                    </div>
				</div>
			</div>

			<!-- </main>#main -->

			<!-- </div>#primary -->

			<!-- </div>#content -->

			<footer class="footerClass">
				<div class="footer_blue">
					<div class="wrapper">
						<div class="col-sm-3 float-left">
							<h2>Quick Link</h2>

							<div class="menu-footer-menu-1-container">
								<ul id="menu-footer-menu-1" class="navMenu">
									<li
										id="menu-item-80"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-80"
									>
										<a href="https://www.wbscardb.com/">Home</a>
									</li>
									<li
										id="menu-item-81"
										class="menu-item menu-item-type-post_type menu-item-object-page current-page-ancestor menu-item-81"
									>
										<a href="https://www.wbscardb.com/about-us/">About Us</a>
									</li>
									<li
										id="menu-item-83"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-83"
									>
										<a href="https://www.wbscardb.com/financial-statements/"
											>Financial Statements</a
										>
									</li>
									<li
										id="menu-item-611"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-611"
									>
										<a href="https://www.wbscardb.com/interest-rate/"
											>Interest Rate</a
										>
									</li>
									<li
										id="menu-item-84"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-84"
									>
										<a href="https://www.wbscardb.com/gallery/">Gallery</a>
									</li>
									<li
										id="menu-item-85"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-85"
									>
										<a href="https://www.wbscardb.com/contact-us/"
											>Contact Us</a
										>
									</li>
									<li
										id="menu-item-86"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-86"
									>
										<a href="https://www.wbscardb.com/notices/">Notices</a>
									</li>
									<li
										id="menu-item-773"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-773"
									>
										<a href="https://www.wbscardb.com/sitemap/">Sitemap</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-sm-3 float-left">
							<h2>Branches Network</h2>

							<div class="menu-footer-menu-2-container">
								<ul id="menu-footer-menu-2" class="navMenu">
									<li
										id="menu-item-89"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-89"
									>
										<a
											href="https://www.wbscardb.com/branches-network/list-of-branches/"
											>List of Branches</a
										>
									</li>
									<li
										id="menu-item-92"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-92"
									>
										<a
											href="https://www.wbscardb.com/branches-network/lists-of-ardbs-member-banks/"
											>Lists of ARDBs/Member Banks</a
										>
									</li>
									<li
										id="menu-item-95"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-95"
									>
										<a
											href="https://www.wbscardb.com/branches-network/training-centre/"
											>Training Centre</a
										>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-sm-3 float-left">
							<h2>Product &amp; Services</h2>

							<div class="menu-footer-menu-3-container">
								<ul id="menu-footer-menu-3" class="navMenu">
									<li
										id="menu-item-98"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-98"
									>
										<a href="https://www.wbscardb.com/deposit/">Deposit</a>
									</li>
									<li
										id="menu-item-101"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-101"
									>
										<a href="https://www.wbscardb.com/loans-advances/"
											>Loans &#038; Advances</a
										>
									</li>
									<li
										id="menu-item-104"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-104"
									>
										<a href="https://www.wbscardb.com/refinances/"
											>Refinance Policy</a
										>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-sm-3 float-left">
							<h2>Activities</h2>

							<div class="menu-footer-menu-4-container">
								<ul id="menu-footer-menu-4" class="navMenu">
									<li
										id="menu-item-110"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-110"
									>
										<a href="https://www.wbscardb.com/empowerment-of-woman/"
											>Empowerment of Woman</a
										>
									</li>
									<li
										id="menu-item-113"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-113"
									>
										<a href="https://www.wbscardb.com/shg-jlg/">SHG/JLG</a>
									</li>
									<li
										id="menu-item-116"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-116"
									>
										<a
											href="https://www.wbscardb.com/sccy-self-employment-scheme/"
											>SCCY/Self Employment Scheme</a
										>
									</li>
									<li
										id="menu-item-119"
										class="menu-item menu-item-type-post_type menu-item-object-page menu-item-119"
									>
										<a href="https://www.wbscardb.com/govt-aided-scheme/"
											>Govt. aided Scheme</a
										>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<br clear="all" />
				</div>

				<div class="footer_blck">
					<div class="wrapper">
						<div class="col-sm-6 float-left copyrightLogo">
							<img
								src="https://www.wbscardb.com/wp-content/themes/WBSCARDB-child/assets/images/footerLogo.png"
								alt=""
							/>
						</div>

						<div class="col-sm-6 float-left copyrightRight">
							<p>
								<a
									href="https://www.wbscardb.com/terms-conditions/"
									target="_blank"
									>Terms & Conditions</a
								>
								|
								<a
									href="https://www.wbscardb.com/privacy-policy/"
									target="_blank"
									>Privacy Policy</a
								>
								|
								<a
									href="https://www.wbscardb.com/disclaimer-policy/"
									target="_blank"
									>Disclaimer</a
								><br />

								Copyright © 2021 WBSCARDB<br />

								<span class="design"
									>Designed &amp; Developed by
									<a href="https://synergicsoftek.in/" target="_blank"
										>Synergic Softek Solutions Private Limited</a
									></span
								>
							</p>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<!-- #page -->

		<!--========== Onload Popup Start ==========-->

		<!--========== Onload Popup End ==========-->

		<script>
			document.body.classList.remove("no-js");
		</script>
		<script>
			if (
				-1 !== navigator.userAgent.indexOf("MSIE") ||
				-1 !== navigator.appVersion.indexOf("Trident/")
			) {
				document.body.classList.add("is-IE");
			}
		</script>
		<script id="twenty-twenty-one-ie11-polyfills-js-after">
			(Element.prototype.matches &&
				Element.prototype.closest &&
				window.NodeList &&
				NodeList.prototype.forEach) ||
				document.write(
					'<script src="https://www.wbscardb.com/wp-content/themes/WBSCARDB/assets/js/polyfills.js?ver=1.2"></scr' +
						"ipt>"
				);
		</script>
		<script
			src="https://www.wbscardb.com/wp-content/themes/WBSCARDB/assets/js/responsive-embeds.js?ver=1.2"
			id="twenty-twenty-one-responsive-embeds-script-js"
		></script>
		<script>
			/(trident|msie)/i.test(navigator.userAgent) &&
				document.getElementById &&
				window.addEventListener &&
				window.addEventListener(
					"hashchange",
					function () {
						var t,
							e = location.hash.substring(1);
						/^[A-z0-9_-]+$/.test(e) &&
							(t = document.getElementById(e)) &&
							(/^(?:a|select|input|button|textarea)$/i.test(t.tagName) ||
								(t.tabIndex = -1),
							t.focus());
					},
					!1
				);
		</script>

		<!--========== Onload Popup Start ==========-->

		<script>
			$(document).ready(function () {
				$("#myModal").modal("show");
			});
		</script>

		<!--========== Onload Popup End ==========-->

		<script src="https://www.wbscardb.com/wp-content/themes/WBSCARDB-child/assets/mobileMenu/scripts.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<script
			src="https://www.wbscardb.com/wp-content/themes/WBSCARDB-child/assets/slick/slick.js"
			type="text/javascript"
			charset="utf-8"
		></script>

		<script src="https://www.wbscardb.com/wp-content/themes/WBSCARDB-child/assets/js/javascript.js"></script>

		<script src="https://www.wbscardb.com/wp-content/themes/WBSCARDB-child/assets/js/jquery.js"></script>

		<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>-->

		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

		<script>
			var canVas = document.querySelector(".mapboxgl-canvas");

			function canVasWidth() {
				canVas.style.width = "100% !important";

				//canVas.style.transform = 'translateY(0)';
			}

			canVasWidth();

			alert(canVas);
		</script>
	</body>
</html>
