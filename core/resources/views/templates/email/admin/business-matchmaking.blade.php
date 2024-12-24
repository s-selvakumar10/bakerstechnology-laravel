<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <div style="margin:0;padding:20px">
        <table width="100%" cellpadding="10" cellspacing="0" border="0"
            style="table-layout:fixed;background:#ffffff;border-collapse:separate;border-bottom:1px solid #d4d4d4">
            <tbody>
                @foreach ($data ?? [] as $key => $value)
                    @if ($value)
                        <tr bgcolor="#efefef">
                            <td valign="top"
                                style="font-family:Helvetica,Arial,sans-serif;font-size:15px;font-weight:bold;color:#282828;border:1px solid #d4d4d4;border-bottom:0;word-wrap:break-word">
                                {{ ucfirst(str_replace('_',' ',$key)) }}</td>
                        </tr>
                        <tr bgcolor="#fcfcfc">
                            <td valign="top"
                                style="font-family:Helvetica,Arial,sans-serif;font-size:14px;color:#282828;line-height:130%;border:1px solid #d4d4d4;border-bottom-color:#fff;word-wrap:break-word">
                                {{ $value }}</td>
                        </tr>
                    @endif
                @endforeach


            </tbody>
        </table>
    </div>
</body>

</html>
