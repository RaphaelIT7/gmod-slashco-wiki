<function name="LobbyBanter" parent="SlashCo" type="libraryfunc">
	<description>
		Starts a randomly selected survivor conversation in the lobby<br>
		Survivors are assigned to the individual conversation parts and the voice lines are played with their appropriate timing<br>
		<br>
		Returns a delay representing the total duration of the conversation
	</description>
	<realm>Server</realm>
	<rets>
		<ret name="duration" type="number">
			The total duration of the conversation, including its initial delay.<br>
			Returns <code>5</code> when fewer than two survivors are available.
		</ret>
	</rets>
</function>