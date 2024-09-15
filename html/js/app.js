(function () {
	'use strict';
	/* use strictを宣言すると、コードがstrict（厳格）モードで実行されるようになる。strictモードでは、より的確なエラーチェックが行われる。*/

	/* 文字列を分割しspanで囲む */
	(function () {
	  const jsText = document.querySelectorAll('.js-mv_title-item');
	  jsText.forEach(target => {
		let newText = '';
		const text = target.textContent;
		const result = text.split('');
		for (let i = 0; i < result.length; i++) {
		  newText += '<span>' + result[i] + '</span>';
		}
		target.innerHTML = newText;
	  });
	})();

	/* MVアニメーション */
	(function () {


	  /* 以下アニメーション */
	  const jsLoaderBg = '.js-loader-bg'; // カーテン（黒い背景）
	  const jsDot = '.js-loader-dot-wrap > .dot_color1, .js-loader-dot-wrap > .dot_color2, .js-loader-dot-wrap > .dot_color3, .js-loader-dot-wrap > .dot_color4, .js-loader-dot-wrap > .dot_color5, .js-loader-dot-wrap > .dot_color6, .js-loader-dot-wrap > .dot_color7'; // ドット
	  const jsBubble = '.js-mv-bubble [id*=item]'; // バブル（丸い図形）
	  const jsText = '.js-mv_title-item span'; // メインビジュアルのタイトル
	  const jsLeadText = '.js-mv_title-lead'; // メインビジュアルのリード文
	  const jsHeader = '.js-header'; // ヘッダー


	  //初期状態をセット
	  gsap.set(
		[jsBubble, jsText, jsLeadText],
		//アニメーションさせない静止状態を指定する
		{
		  opacity: 0,
		  y: 30
		},
	  );

	  /*  ドットの初期状態を設定 */
	  gsap.set(jsDot, {
		opacity: 0,
		y: -50
	  });

	  // カーテンの初期状態を設定
gsap.set(jsLoaderBg, {
	y: '0%' // 初期位置を設定
  });

	  /* ヘッダー */
	  gsap.set(jsHeader, {
		y: '0%' // 初期位置を設定
	  });

	  gsap.set(['.hoge', '.fuga', '.bar'], {
		opacity: 0
	  });

	  // timelineを作成
	  const tl = gsap.timeline();

	  tl.to(
		/* ドット */
		/* 0.8秒後に起動 */
		jsDot, {
		  opacity: 1,
		  y: 0,
		  duration: 0.8,
		  delay: 0.8,
		  stagger: {
			amount: 0.5,
			from: "start",
			ease: 'power4.inOut'
		  }
		},
	  ).to(
		/* ドット */
		/* 前のアニメーションが完了した後、ドットを消す */
		jsDot, {
		  opacity: 0
		}
	  ).to(
		/* カーテン */
		/* 前のアニメーションが完了した0.5秒後に、カーテンを下へ移動 */
		jsLoaderBg, {
		  y: '100%'
		},
		'+=0.5'
	  ).to(jsBubble, {
		/* バブル */
		/* 0.2秒後に、1秒かけてバブルが個別にアニメーション */
		opacity: 1,
		y: 0,
		duration: 0.8, // seconds
		stagger: {
		  amount: 0.6,
		  from: "start",
		  ease: "sine.in"
		}
	  }, '+=0.2').to(
		/* タイトル */
		jsText, {
		  /* 前のアニメーションが完了する0.1秒前に実行 */
		  opacity: 1,
		  y: 0,
		  stagger: {
			amount: 1,
			from: "start",
			ease: "sine.in"
		  }
		},
		"-=0.1"
	  ).to(
		/* リード文 */
		jsLeadText, {
		  /* 前のアニメーションが完了する0.1秒前に実行 */
		  opacity: 1,
		  y: 0,
		},
		"-=0.2"
	  ).to(
		/* ヘッダー */
		/* 前のアニメーションと同時 */
		jsHeader, {
		  opacity: 1,
		  y: 0,
		  duration: 0.5 // アニメーションの速度を速くするための duration を追加
		},
		"<" // この"<"は、直前のアニメーションと同時に実行されることを示します
	  );
	})();

  })();
// videoスタート調整
  setTimeout(function(){
    var v = document.getElementById('video-home');
    v.play();
},3000);

AOS.init({
	once: true
});


