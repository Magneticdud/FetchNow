# FetchNow 📩

![A lousy icon for this program, depicting a flying email](https://raw.githubusercontent.com/Magneticdud/FetchNow/refs/heads/main/icon.jpg)

A module for freescout that adds a "Fetch now" button for all users

## How to use

**As of now, there is no public-facing button.** 🤦‍♂️

Simply navigate to `yourfreescoutURL.com/fetch-emails` to fetch the latest 3 days of emails, including read emails.  

Yes I was lazy, so all this module does is to register a route in `/fetch-emails` which then will call `php artisan freescout:fetch-emails --days=7 --unseen=0` to get new emails from server from last 7 days. Yes, that's it, I literally took more time to write this readme than actual developing. Just took an empty module and added the route. 😅

This is because customers always call me 4 seconds after submitting a ticket "hey, I just submitted a ticket, did you get it?", and because the cron gets emails every 5 minutes I always had to go to settings>system>tools>fetch for a manual update. And my colleagues didn't have admin rights so they didn't have that button, so they also call me. And I hate answering the phone. So i just bookmark the URL and click when I need it.

If I have time, I will add more features, like a fancy button, settings for including unread emails or not and how many days to include, and so on. Otherwise... ⏬

## Contributing

Contributions are welcome! If you find a bug or have a feature request, please open an issue. If you want to contribute code, please fork the repository and submit a pull request. I'm super happy to receive contributions! 🥳

## License

This project is licensed under the GPL-3.0 License - see the [LICENSE](LICENSE) file for details.
