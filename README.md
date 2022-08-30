# El-Farouk Technical Task using Laravel

This application is about optimizing the upload of huge xlxs files.

## How to install

You can install the application by following these steps:

1. Navigate to the desired location on your computer
2. Open the command prompt and run `git clone https://github.com/JoeHossam/elfarouk-task.git`
3. Navigate to the project folder by running `cd .\elfarouk-task\`
4. Create a new database from the file attached `elfarouk-task.sql`
    > **_NOTE:_** make sure the database runs on port 3306 or simply change it in the .env file.
5. Run `composer install`, to install all the required packages for this project
6. Run `php artisan serve`, to start the server

## How to run:

1. After the server has started navigate to [http://127.0.0.1:8000/users/import](http://127.0.0.1:8000/users/import).
2. There is a simple form where you can upload a file and submit to insert its data into the database.
    > **_NOTE:_** The application expects the file to has 3 columns; name, email and phone.
    > There is also file testingData which already includes a 20 thousands records.
3. When the app finishes, you will see a simple json message `records successfully uploaded` and the excution time, that is when everything has finished succefully.

## Available Scripts

In the project directory, you can run:

### `php artisan serve`

Runs the app in the development mode.
