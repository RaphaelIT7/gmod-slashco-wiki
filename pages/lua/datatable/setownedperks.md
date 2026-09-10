<function name="SetOwnedPerks" parent="Player" type="classfunc">
	<description>
		Sets the player's raw owned-perks string directly.<br>
		Kept in sync with the player's saved `OwnedPerks` database stat by <page>SlashCo.BuyPerk</page>/<page>SlashCo.EnablePerk</page>/<page>SlashCo.DisablePerk</page> - you should use those instead of calling this directly.<br>
		This function is created by the <page text="DTVar Networking System">DTVar Networking</page> system.
		<internal></internal>
	</description>
	<realm>Server</realm>
	<args>
		<arg name="ownedPerks" type="string">The value to set.</arg>
	</args>
</function>