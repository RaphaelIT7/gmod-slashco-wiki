<function name="SetRoundPoints" parent="Player" type="classfunc">
	<description>
		Overrides the points the player has recorded under the given `key`, replacing any points previously added for it.<br>
		Does nothing if the player has no round points recorded yet (i.e. <page>Player:AddRoundPoints</page> hasn't been called before). On the server, the change is networked to the player.
	</description>
	<realm>Shared</realm>
	<group>Round Points</group>
	<args>
		<arg name="key" type="string">Round point category to overwrite.</arg>
		<arg name="amount" type="number" optional>The point value to set. Defaults to a value based on `key` (or `5` if `key` is unknown).</arg>
		<arg name="num" type="number" optional>How many times `amount` should be recorded for `key`. Defaults to `1`.</arg>
	</args>
</function>
