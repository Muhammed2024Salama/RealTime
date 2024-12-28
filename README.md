# Real-Time Notifications in Laravel with Pusher and WebSockets

This project demonstrates how to implement real-time notifications in a Laravel application using **Pusher**, **Laravel WebSockets**, and **Laravel Notifications**.

## Features
- **Real-Time Notifications**: Users receive instant notifications in real time without refreshing the page.
- **WebSocket Integration**: Utilizes Laravel WebSockets for real-time communication.
- **Pusher Integration**: Sends notifications via Pusher channels.
- **Custom Notification UI**: Displays notifications dynamically on the front end.
- **Dynamic Updates**: Updates notification badges and lists in real time using Laravel Echo and JavaScript.

## Requirements
- PHP ^7.2
- Laravel ^10.8
- Node.js (for Echo and WebSockets)
- Composer
- Redis (Optional, for better performance in real-time handling)
- Pusher Account (or self-hosted WebSocket server)

## Setup Instructions

1. **Clone the Repository**
   ```bash
   git clone https://github.com/Muhammed2024Salama/RealTime.git
   cd RealTime
   ```

2. **Install Dependencies**
   ```bash
   composer install
   composer update
   npm install
   npm run build
   ```

3. **Set Up Environment Variables**
   Update the `.env` file with the following:
   ```env
   BROADCAST_DRIVER=pusher
   PUSHER_APP_ID=your-pusher-app-id
   PUSHER_APP_KEY=your-pusher-app-key
   PUSHER_APP_SECRET=your-pusher-app-secret
   PUSHER_APP_CLUSTER=your-pusher-app-cluster
   ```

4. **Run Migrations**
   ```bash
   php artisan migrate --seed
   ```

5. **Start Servers**
    - Start Laravel WebSocket server:
      ```bash
      php artisan websockets:serve
      ```
    - Start the application:
      ```bash
      php artisan serve
      ```
    - Start the front-end build tool:
      ```bash
      npm run dev
      ```

6. **Test Notifications**
    - Trigger notifications from the back end using Laravel's `Notification` system.
    - Watch real-time updates on the front end via Pusher and WebSockets.

## Key Files and Code
- **Notification Class**: Located in `app/Notifications/`.
- **JavaScript (Laravel Echo)**: Located in `resources/js/`.
- **WebSocket Configuration**: Configured in `config/websockets.php`.

## License
This project is licensed under the MIT License.

