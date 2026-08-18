<function name="GetActivePerks" parent="SlashCo" type="libraryfunc">
	<description>
		Returns all active perks equipped by a player.<br>
		Active perks are identified by a `!` prefix in the player's owned perk string.
	</description>
	<realm>Shared</realm>
	<group>Perks</group>
	<args>
		<arg name="ply" type="Player">Player whose active perks should be retrieved</arg>
	</args>
	<rets>
		<ret name="perks" type="table">Table of active perk IDs with their perk definitions indexed by ID</ret>
	</rets>
</function>