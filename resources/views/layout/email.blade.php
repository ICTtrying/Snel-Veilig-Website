
<div style="font-family: Arial, sans-serif; background: #f9f9f9; padding: 32px; border-radius: 8px; max-width: 500px; margin: 0 auto; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
	<h2 style="color: #2c3e50; border-bottom: 1px solid #e1e1e1; padding-bottom: 12px; margin-bottom: 24px;">Nieuw contactbericht van {{ $data['naam'] }}</h2>

	<table style="width: 100%; border-collapse: collapse; margin-bottom: 24px;">
		<tr>
			<td style="padding: 8px 0; color: #555;"><strong>Email:</strong></td>
			<td style="padding: 8px 0; color: #333;"><a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a></td>
		</tr>
		@if(!empty($data['telefoon']))
		<tr>
			<td style="padding: 8px 0; color: #555;"><strong>Telefoon:</strong></td>
			<td style="padding: 8px 0; color: #333;"><a href="tel:{{ $data['telefoon'] }}">{{ $data['telefoon'] }}</a></td>
		</tr>
		@endif
	</table>

	<div style="background: #fff; border-radius: 6px; padding: 16px; border: 1px solid #e1e1e1;">
		<p style="margin: 0 0 8px 0; color: #555;"><strong>Bericht:</strong></p>
		<p style="margin: 0; color: #333;">{{ $data['bericht'] }}</p>
	</div>
</div>
