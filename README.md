# FetchNow 📩

![A lousy icon for this program, depicting a flying email](https://raw.githubusercontent.com/Magneticdud/FetchNow/refs/heads/main/icon.png)

A module for freescout that adds a "Fetch now" button for all users

## Installation

1. Browse to your `Modules` directory
2. `wget https://github.com/Magneticdud/FetchNow/archive/refs/heads/main.zip`
3. `unzip main.zip && rm main.zip`
4. `mv FetchNow-main/ FetchNow/` (‼️⚠️‼️ IMPORTANT, because otherwise you will get a `production.ERROR: Class "Modules\FetchNow\Providers\FetchNowServiceProvider" not found` exception)
5. `chown -R nginx:www-data FetchNow` (this is because I am using [Tiredofit's docker image](https://github.com/tiredofit/docker-freescout), otherwise adapt to your www user)
6. Enable it in `yourfreescoutURL.com/modules/list`
7. If and when updates are released, they will get listed in the modules installation page.

## How to use

**As of now, there is no public-facing button.** 🤦‍♂️

Simply navigate to `yourfreescoutURL.com/fetch-emails` to fetch the latest 7 days of emails, including read emails.  

Yes I was lazy, so all this module does is to register a route in `/fetch-emails` which then will call `php artisan freescout:fetch-emails --days=7 --unseen=0` to get new emails from server from last 7 days. Yes, that's it, I literally took more time to write this readme than actual developing. Just took an empty module and added the route. 😅

This is because customers always call me 4 seconds after submitting a ticket "hey, I just submitted a ticket, did you get it?", and because the cron gets emails every 5 minutes I always had to go to settings>system>tools>fetch for a manual update. And my colleagues didn't have admin rights so they didn't have that button, so they also call me. And I hate answering the phone. So i just bookmark the URL and click when I need it.

If I have time, I will add more features, like a fancy button, settings for including unread emails or not and how many days to include, and so on. Otherwise... ⏬

## Contributing

Contributions are welcome! If you find a bug or have a feature request, please open an issue. If you want to contribute code, please fork the repository and submit a pull request. I'm super happy to receive contributions! 🥳

## License

This project is licensed under the GPL-3.0 License - see the [LICENSE](LICENSE) file for details.
