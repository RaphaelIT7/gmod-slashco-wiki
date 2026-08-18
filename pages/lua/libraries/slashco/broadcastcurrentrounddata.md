<function name="BroadcastCurrentRoundData" parent="SlashCo" type="libraryfunc">
	<description>
		<note>
			The function may be changed in the future to solve it's inefficient networking
		</note>
		Broadcasts the current Round Survivors, Slashers and offerings to everyone.<br>
		Additionally broadcasts the SlasherData... which is just the same as above?<br>
	</description>
	<realm>Server</realm>
	<args>
		<arg name="readyGame" type="boolean">`true` when the game is setup and ready to start</arg>
	</args>
</function>