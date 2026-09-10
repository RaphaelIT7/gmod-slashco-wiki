<function name="RemoveRoundPointsKey" parent="Player" type="classfunc">
	<description>
		Removes all points recorded under the given `key` for the player.<br>
		Does nothing if the player has no round points recorded yet. On the server, the change is networked to the player.
	</description>
	<realm>Shared</realm>
	<group>Round Points</group>
	<args>
		<arg name="key" type="string">Round point category to remove.</arg>
	</args>
</function>
