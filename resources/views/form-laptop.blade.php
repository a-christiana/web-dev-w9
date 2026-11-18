<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            margin: 0;
            display: grid;
            place-items: center;
            padding: 24px;
            background: #f3f6fb;
            color: #1e293b;
            font-family: Inter, "Segoe UI", sans-serif;
        }

        form {
            width: min(100%, 420px);
            padding: 32px;
            border: 1px solid #e2e8f0;
            border-radius: 18px;
            background: #fff;
            box-shadow: 0 16px 40px rgb(15 23 42 / 8%);
        }

        form div {
            margin: 0 0 8px;
            color: #475569;
            font-size: 14px;
            font-weight: 600;
        }

        form input:not([type="submit"]) {
            width: 100%;
            height: 44px;
            margin: 0 0 20px;
            padding: 0 12px;
            border: 1px solid #cbd5e1;
            border-radius: 9px;
            outline: none;
            background: #fff;
            color: #1e293b;
            font: inherit;
            transition: border-color 160ms ease, box-shadow 160ms ease;
        }

        form input:not([type="submit"]):focus {
            border-color: #6366f1;
            box-shadow: 0 0 0 3px rgb(99 102 241 / 15%);
        }

        form div:has([type="submit"]) {
            margin: 4px 0 0;
        }

        form input[type="submit"] {
            width: 100%;
            min-height: 46px;
            border: 0;
            border-radius: 9px;
            background: #4f46e5;
            color: #fff;
            font: inherit;
            font-weight: 600;
            cursor: pointer;
            transition: background 160ms ease, transform 160ms ease;
        }

        form input[type="submit"]:hover {
            background: #4338ca;
            transform: translateY(-1px);
        }
    </style>
</head>
<body>
    <form method="POST" action="{{ route('save-laptop')}}">
        @csrf
        <div>Input Brand</div>
        <input type="text" name="brand">
        <div>Input Model</div>
        <input type="text" name="model">
        <div>Input Processor</div>
        <input type="text" name="processor">
        <div>Input RAM</div>
        <input type="number" name="ram">
        <div><input type="submit" value="Save Laptop"></div>
    </form>
</body>
</html>