<function name="IsStuck" parent="Player" type="classfunc">
	<description>
		Checks if the player's current position is stuck inside solid geometry, by tracing their player hull at their own position.<br>
		Always returns `false` for spectators and players who are noclipping.
	</description>
	<realm>Shared</realm>
	<args>
		<arg name="worldOnly" type="boolean" optional>If `true`, only checks against the world instead of players too</arg>
	</args>
	<rets>
		<ret name="stuck" type="boolean">Whether the player is stuck</ret>
	</rets>
</function>
