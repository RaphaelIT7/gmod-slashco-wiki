<function name="GetRoundStartTime" parent="SlashCo" type="libraryfunc">
	<description>
		Returns the time the round started at using [CurTime](https://wiki.facepunch.com/gmod/Global.CurTime)
	</description>
	<realm>Server</realm>
	<rets>
		<ret name="time" type="number" default="CurTime()">
			The time the round started.<br>
			If it wasn't started yet it will return the current time.
		</ret>
	</rets>
</function>