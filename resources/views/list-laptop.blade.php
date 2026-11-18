<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Laptop</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            margin: 0;
            padding: 48px 24px;
            background: #f3f6fb;
            color: #1e293b;
            font-family: Inter, "Segoe UI", sans-serif;
        }

        main {
            width: min(100%, 960px);
            margin: 0 auto;
        }

        h1 {
            margin: 0 0 8px;
            font-size: clamp(24px, 4vw, 32px);
            letter-spacing: -0.04em;
        }

        p {
            margin: 0 0 24px;
            color: #64748b;
            font-size: 15px;
        }

        .table-card {
            overflow-x: auto;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            background: #fff;
            box-shadow: 0 16px 40px rgb(15 23 42 / 7%);
        }

        table {
            width: 100%;
            min-width: 560px;
            border-collapse: collapse;
            text-align: left;
        }

        th,
        td {
            padding: 16px 20px;
            border-bottom: 1px solid #eef2f7;
        }

        th {
            background: #f8fafc;
            color: #64748b;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.06em;
            text-transform: uppercase;
        }

        td {
            color: #334155;
            font-size: 14px;
        }

        .actions {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .action-button {
            display: inline-flex;
            min-height: 34px;
            align-items: center;
            justify-content: center;
            padding: 0 12px;
            border: 0;
            border-radius: 7px;
            background: #eef2ff;
            color: #4338ca;
            font: inherit;
            font-size: 13px;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
        }

        .action-button:hover {
            background: #e0e7ff;
        }

        .action-button.delete {
            background: #fff1f2;
            color: #be123c;
        }

        .action-button.delete:hover {
            background: #ffe4e6;
        }

        tbody tr:last-child td {
            border-bottom: 0;
        }

        tbody tr:hover {
            background: #f8faff;
        }

        @media (max-width: 600px) {
            body {
                padding: 32px 16px;
            }

            th,
            td {
                padding: 14px 16px;
            }
        }
    </style>
</head>
<body>
    <main>
        <h1>Daftar Laptop</h1>
        <p>Informasi laptop yang tersimpan.</p>
        <div class="table-card">
            <table>
                <thead>
                    <tr>
                        <th>Brand</th>
                        <th>Model</th>
                        <th>Processor</th>
                        <th>RAM</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($laptop as $laptop)
                    <tr>
                        <td>{{ $laptop->brand }}</td>
                        <td>{{ $laptop->model }}</td>
                        <td>{{ $laptop->processor }}</td>
                        <td>{{ $laptop->ram }}</td>
                        <td>
                            <div class="actions">
                                <a class="action-button" href="{{ route('edit-laptop', $laptop) }}">Edit</a>
                                <form method="POST" action="{{ route('delete-laptop') }}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $laptop->id }}">
                                    <button class="action-button delete" type="submit">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>