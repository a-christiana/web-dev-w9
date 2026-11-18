<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Laptop</title>
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

        h1 {
            margin: 0 0 24px;
            font-size: 24px;
            letter-spacing: -0.03em;
        }

        label {
            display: block;
            margin: 0 0 8px;
            color: #475569;
            font-size: 14px;
            font-weight: 600;
        }

        input:not([type="submit"]) {
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
        }

        input:not([type="submit"]):focus {
            border-color: #6366f1;
            box-shadow: 0 0 0 3px rgb(99 102 241 / 15%);
        }

        .error {
            margin: -14px 0 16px;
            color: #be123c;
            font-size: 13px;
        }

        .buttons {
            display: flex;
            gap: 10px;
            margin-top: 4px;
        }

        .buttons a,
        .buttons input {
            display: inline-flex;
            min-height: 44px;
            flex: 1;
            align-items: center;
            justify-content: center;
            border: 0;
            border-radius: 9px;
            font: inherit;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
        }

        .buttons input {
            background: #4f46e5;
            color: #fff;
        }

        .buttons input:hover {
            background: #4338ca;
        }

        .buttons a {
            background: #f1f5f9;
            color: #475569;
        }
    </style>
</head>
<body>
    <form method="POST" action="{{ route('update-laptop', $laptop) }}">
        @csrf
        @method('PUT')
        <h1>Edit Laptop</h1>

        <label for="brand">Brand</label>
        <input id="brand" type="text" name="brand" value="{{ old('brand', $laptop->brand) }}" required>
        @error('brand') <div class="error">{{ $message }}</div> @enderror

        <label for="model">Model</label>
        <input id="model" type="text" name="model" value="{{ old('model', $laptop->model) }}" required>
        @error('model') <div class="error">{{ $message }}</div> @enderror

        <label for="processor">Processor</label>
        <input id="processor" type="text" name="processor" value="{{ old('processor', $laptop->processor) }}" required>
        @error('processor') <div class="error">{{ $message }}</div> @enderror

        <label for="ram">RAM (GB)</label>
        <input id="ram" type="number" name="ram" min="1" value="{{ old('ram', $laptop->ram) }}" required>
        @error('ram') <div class="error">{{ $message }}</div> @enderror

        <div class="buttons">
            <a href="{{ url('/') }}">Cancel</a>
            <input type="submit" value="Update Laptop">
        </div>
    </form>
</body>
</html>
