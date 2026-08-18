<function name="Abort" parent="SlashCo" type="libraryfunc">
	<description>
		Aborts the current round due to a technical issue.<br>
		Notifies all players, logs the reason with a stack trace, and schedules a return to the lobby.<br>
		If the round has already been aborted, additional calls do not create another round-over timer.
	</description>
	<realm>Server</realm>
	<args>
		<arg name="reason" type="string">Reason the round is being aborted</arg>
	</args>
</function>