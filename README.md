<a href="https://drone.sys-admin.ir/amirbagh75/cicd-masshadlug"><img src="https://drone.sys-admin.ir/api/badges/amirbagh75/cicd-masshadlug/status.svg" /></a>

<div dir='auto'>
<h2> ارائه cicd مشهدلاگ </h1>
</div>

<div dir='auto'>

وقتی یک commit در این پروژه push میشود چه اتفاقی میفتد؟

- ابتدا یک hook به سمت drone server ارسال میشود. منظور از hook ارسال یک پیام از  github به drone سرور حاوی اطلاعاتی از اتفاق رخ داده در push میباشد.
- drone server بعد از گرفتن اطلاعات ارسال شده توسط github شروع به پردازش payload یا همان اطلاعات مربوطه میکند.
- اگر همه چیز درست بود،‌ drone server به یکی از agent ها که وظیفه اجرای pipeline های cicd را دارد، خبر میدهد و فایل .drone.yml را به آن تحویل میدهد.
- agent مربوطه بعد از دریافت فایل [ .drone.yml](https://github.com/amirbagh75/cicd-masshadlug/blob/master/.drone.yml) که pipeline در آن نوشته شده است، شروع به اجرای خط به خط pipeline میکند.
- ما در صفحه مانیتورینگ drone server میتوانیم گزارش لحظه ای از فرآیند های که در agent ها در حال اجراست ببینیم. [لینک](https://drone.sys-admin.ir/amirbagh75/cicd-masshadlug
)

نکات کلی:
- در این پروژه از ابزار drone استفاده شده که اطلاعات خیلی خوبی در [مستندات](https://docs.drone.io) آن آمده است.
- drone به اشکال مختلف میتواند اجرا شود که ما در این پروژه از حالت docker ای آن استفاده کردیم. برای فهمیدن تفاوت های حالت های مختلف اجرا به اینجا [لینک](https://docs.drone.io/configure/pipeline/overview) مراجعه کنید.
- اگر هنوز نمیدونید cicd  کلا یعنی چی از اینجا مطالعه کنید: [لینک](https://dzone.com/articles/learn-how-to-setup-a-cicd-pipeline-from-scratch)
- فایل ارائه من در مشهد لاگ هم از اینجا قابل دانلود هست: [لینک](https://github.com/amirbagh75/cicd-masshadlug/blob/master/mashhadlug-cicd.pdf)
- آيا این پروژه دارای یک فرایند کامل cicd میباشد؟ خیر! به هیچ وجه. این فقط یک hello world برای cicd میباشد. فرآیند های اصولی و درست cicd نیازمند جزییات و پیش زمینه های بیشتری میباشد. از تست های کامل تا استراتژ های مدیریت مخازن git و استراتژی های deploy و ...

برای دیدن json ها به صورت مرتب در terminal:

<div dir='ltr'>

<code>sudo apt install jq</code>

</div>

برای نصب و اجرای پروژه به صورت معمولی:
<div dir='ltr'>

<code>git clone https://github.com/amirbagh75/cicd-masshadlug</code>

<code>cd cicd-masshadlug</code>

<code>cp .env.example .env</code>

<code>php artisan key:generate</code>

<code>php artisan serve</code>

<code>curl -s 127.0.0.1:9000/sum/2/2 | jq</code>

</div>

برای اجرای تست پروژه (در دایرکتوری root پروژه)
<div dir='ltr'>

<code>./vendor/bin/phpunit</code>

</div>

برای نصب و اجرای پروژه با داکر:
<div dir='ltr'>

<code>docker run -p 9000:8000 -i -t -d --name cicd-project amirbagh75/mashhadlug-cicd</code>

<code>curl -s 127.0.0.1:9000/sum/2/2 | jq</code>

</div>

</div>
