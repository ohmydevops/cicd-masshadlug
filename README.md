drone: <a href="https://drone.sys-admin.ir/amirbagh75/mashhadlug-cicd"><img src="https://drone.sys-admin.ir/api/badges/amirbagh75/mashhadlug-cicd/status.svg" /></a>
travis: [![Build Status](https://travis-ci.org/amirbagh75/mashhadlug-cicd.svg?branch=master)](https://travis-ci.org/amirbagh75/mashhadlug-cicd)
circle-ci: [![CircleCI](https://circleci.com/gh/amirbagh75/mashhadlug-cicd.svg?style=svg)](https://circleci.com/gh/amirbagh75/mashhadlug-cicd)

<div dir='auto'>
<h2> ارائه cicd مشهدلاگ </h1>
</div>

<div dir='auto'>

وقتی یک commit در این پروژه push میشود چه اتفاقی میفتد؟

- ابتدا یک hook به سمت drone server ارسال میشود. منظور از hook ارسال یک پیام از  github به drone سرور حاوی اطلاعاتی از اتفاق رخ داده در push میباشد.
- drone server بعد از گرفتن اطلاعات ارسال شده توسط github شروع به پردازش payload یا همان اطلاعات مربوطه میکند.
- اگر همه چیز درست بود،‌ drone server به یکی از agent ها که وظیفه اجرای pipeline های cicd را دارد، خبر میدهد و فایل .drone.yml را به آن تحویل میدهد.
- agent مربوطه بعد از دریافت فایل  .drone.yml که pipeline در آن نوشته شده است، شروع به اجرای خط به خط pipeline میکند.
- ما در صفحه مانیتورینگ drone server میتوانیم گزارش لحظه ای از فرآیند های که در agent ها در حال اجراست ببینیم.

نکات کلی:
- در این پروژه از ابزار drone استفاده شده که اطلاعات خیلی خوبی در مستندات آن به آدرس [لینک](https://docs.drone.io) وجود دارد.
- drone به اشکال مختلف میتواند اجرا شود که ما در این پروژه از حالت docker ای آن استفاده کردیم. برای فهمیدن تفاوت های حالت های مختلف اجرا به اینجا [لینک](https://docs.drone.io/configure/pipeline/overview) مراجعه کنید.
- اگر هنوز نمیدونید cicd  کلا یعنی چی از اینجا مطالعه کنید: [لینک](https://dzone.com/articles/learn-how-to-setup-a-cicd-pipeline-from-scratch)
- فایل ارائه من در مشهد لاگ هم از اینجا قابل دانلود هست: [لینک]()
</div>
