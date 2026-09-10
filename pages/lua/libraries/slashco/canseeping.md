<function name="CanSeePing" parent="SlashCo" type="libraryfunc">
	<description>
		Returns whether a player on `plyTeam` is allowed to see a ping placed by a player on `pingTeam`.<br>
		Spectators can see every ping. Survivors can additionally see pings made by spectators. Otherwise a ping is only visible to players on the same team.<br>
		This is shared between client and server to avoid mismatches caused by either side seeing a different team setup.
	</description>
	<realm>Shared</realm>
	<group>Pings</group>
	<args>
		<arg name="plyTeam" type="number">Team of the player checking whether it can see the ping</arg>
		<arg name="pingTeam" type="number">Team of the player who placed the ping</arg>
	</args>
	<rets>
		<ret name="canSee" type="boolean">Whether the ping is visible to `plyTeam`</ret>
	</rets>
</function>