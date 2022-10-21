<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Pesan Anda</title>
</head>
<body>
    <p>Hallo <b>{{$details['name']}}</b> berikut ini adalah komentar Anda:</p>
    <table>
      <tr>
        <td>name</td>
        <td>:</td>
        <td>{{$details['name']}}</td>
      </tr>
      <tr>
        <td>subject</td>
        <td>:</td>
        <td>{{$details['subject']}}</td>
      </tr>
      <tr>
        <td>message</td>
        <td>:</td>
        <td>{{$details['message']}}</td>
      </tr>
    </table>
    <p>Terimakasih <b>{{$details['name']}}</b> telah memberi komentar.</p>
</body>
</html>