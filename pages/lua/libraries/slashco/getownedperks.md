<function name="GetOwnedPerks" parent="SlashCo" type="libraryfunc">
	<description>
		Returns all perks owned by a player.<br>
		Active perks are included and have their leading `!` removed from the returned IDs.
	</description>
	<realm>Shared</realm>
	<group>Perks</group>
	<args>
		<arg name="ply" type="Player">Player whose owned perks should be retrieved</arg>
	</args>
	<rets>
		<ret name="perks" type="table">Table of owned perk IDs with their perk definitions indexed by ID</ret>
	</rets>
</function>