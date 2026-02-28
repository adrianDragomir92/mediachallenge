<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8" />
    <title>Mesaj nou Media Challenge</title>
</head>
<body style="font-family: 'Space Grotesk', Arial, sans-serif; background: #f4f6f8; padding: 30px;">
    <table cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px; margin: 0 auto; background: #ffffff; border-radius: 16px; padding: 24px; border: 1px solid #e5e7eb;">
        <tr>
            <td>
                <h2 style="margin-top: 0; color: #111827;">Mesaj nou de pe mediachallenge.ro</h2>
                <p style="color: #4b5563;">Ai primit un mesaj prin formularul de contact.</p>
                <table cellpadding="0" cellspacing="0" width="100%" style="margin-top: 20px;">
                    <tr>
                        <td style="width: 150px; font-weight: 600; color: #111827;">Nume</td>
                        <td style="color: #1f2937;">{{ $data['nume'] }}</td>
                    </tr>
                    <tr>
                        <td style="width: 150px; font-weight: 600; color: #111827;">Email</td>
                        <td style="color: #1f2937;">{{ $data['email'] }}</td>
                    </tr>
                    @if(!empty($data['telefon']))
                        <tr>
                            <td style="width: 150px; font-weight: 600; color: #111827;">Telefon</td>
                            <td style="color: #1f2937;">{{ $data['telefon'] }}</td>
                        </tr>
                    @endif
                    @if(!empty($data['servicii']))
                        <tr>
                            <td style="width: 150px; font-weight: 600; color: #111827;">Servicii dorite</td>
                            <td style="color: #1f2937;">{{ $data['servicii'] }}</td>
                        </tr>
                    @endif
                </table>
                <div style="margin-top: 24px; padding: 16px; background: #f3f4f6; border-radius: 12px; color: #1f2937;">
                    <p style="margin: 0 0 8px; font-weight: 600;">Mesaj</p>
                    <p style="margin: 0; white-space: pre-line;">{{ $data['mesaj'] }}</p>
                </div>
                <p style="margin-top: 24px; color: #9ca3af; font-size: 12px;">Acest email a fost generat automat.</p>
            </td>
        </tr>
    </table>
</body>
</html>
