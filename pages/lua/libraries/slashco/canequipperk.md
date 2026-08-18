<function name="CanEquipPerk" parent="SlashCo" type="libraryfunc">
	<description>
		Checks whether a player is allowed to equip a perk.<br>
		The perk must exist, the player must meet its level requirement, and the player must own it.<br>
		The perk must also not conflict with any currently active perk.<br>
		Returns a failure reason and, for conflicts, the conflicting perk definition.
	</description>
	<realm>Shared</realm>
	<args>
		<arg name="ply" type="Player">Player attempting to equip the perk</arg>
		<arg name="checkPerkID" type="string">ID of the perk to check</arg>
	</args>
	<rets>
		<ret name="canEquip" type="boolean">Whether the player can equip the perk</ret>
		<ret name="reason" type="string">Failure reason, such as `perk_invalid`, `perk_level_too_low`, `perk_not_owned`, or `perk_conflict`</ret>
		<ret name="conflictingPerk" type="table">The conflicting active perk when the failure reason is `perk_conflict`, otherwise `nil`</ret>
	</rets>
</function>